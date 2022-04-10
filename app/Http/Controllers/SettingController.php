<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

/**
 * Class SettingController
 * @package App\Http\Controllers
 */
class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!empty(request()->input('group'))){
            $settings = Setting::where('key', 'LIKE', request()->input('group') . '%')->paginate();
        }
        else {
            $settings = Setting::paginate();
        }

        return view('setting.index', compact('settings'))
            ->with('i', (request()->input('page', 1) - 1) * $settings->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = new Setting();
        return view('setting.create', compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Setting::$rules);

        $setting = Setting::create($request->all());

        return redirect()->route('settings.edit', ['setting' => $setting->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting = Setting::find($id);

        return view('setting.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::find($id);

        return view('setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Setting $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $rules = Setting::$rules;
        if($request->type == "image"){
            $rules['value'] = 'required|file|image|mimes:jpeg,png,jpg';
        }
        request()->validate($rules);
        $data = $request->all();
        if($request->type == "image"){
            $file = $request->file('value');
            $filename = $request->file('value')->getClientOriginalName();
            $upload_path = "uploads/image";
            Storage::disk('public')->makeDirectory(dirname($upload_path));
            
            unlink(Storage::disk('public')->path($setting->value));

            $filepath = $file->storeAs($upload_path, $filename, 'public');
            $data = $request->all();
            unset($data['value']);
            $data['value'] = $filepath;
        }

        $setting->update($data);

        return redirect()->route('settings.index')
            ->with('success', 'Setting updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $setting = Setting::find($id);
        if($setting->type == "image"){
            unlink(Storage::disk('public')->path($setting->value));
        }
        $setting->delete();

        return redirect()->route('settings.index')
            ->with('success', 'Setting deleted successfully');
    }
}
