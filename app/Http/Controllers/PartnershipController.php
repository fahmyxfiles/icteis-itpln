<?php

namespace App\Http\Controllers;

use App\Models\Partnership;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Image;

/**
 * Class PartnershipController
 * @package App\Http\Controllers
 */
class PartnershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partnerships = Partnership::paginate();

        return view('partnership.index', compact('partnerships'))
            ->with('i', (request()->input('page', 1) - 1) * $partnerships->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partnership = new Partnership();
        return view('partnership.create', compact('partnership'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Partnership::$rules);

        $logo = $request->file('logo');
        $filename = sha1($request->input('name') . Str::random(20)).'.jpg'; 
        $logo_filepath = "images/partnership/".$filename;
        Storage::disk('public')->makeDirectory(dirname($logo_filepath));
        $resizeImage = Image::make($logo)->fit(160, 83, function ($constraint) {
            $constraint->upsize();
        })->encode('jpg', 100)->save(Storage::disk('public')->path($logo_filepath));

        $data = $request->all();
        unset($data['logo']);
        $data['logo'] = $logo_filepath;

        $partnership = Partnership::create($data);

        return redirect()->route('partnerships.index')
            ->with('success', 'Partnership created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $partnership = Partnership::find($id);

        return view('partnership.show', compact('partnership'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partnership = Partnership::find($id);

        return view('partnership.edit', compact('partnership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Partnership $partnership
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partnership $partnership)
    {
        request()->validate(Partnership::$rules);

        $data = $request->all();
        if(request()->has('logo')){
            $logo = $request->file('logo');
            $logo_filepath = $partnership->logo;
            Storage::disk('public')->makeDirectory(dirname($logo_filepath));
            $resizeImage = Image::make($logo)->fit(160, 83, function ($constraint) {
                $constraint->upsize();
            })->encode('jpg', 100)->save(Storage::disk('public')->path($logo_filepath));

            unset($data['logo']);
            $data['logo'] = $logo_filepath;
        }

        $partnership->update($data);

        return redirect()->route('partnerships.index')
            ->with('success', 'Partnership updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $partnership = Partnership::find($id);

        unlink(Storage::disk('public')->path($partnership->logo));
        $partnership->delete();

        return redirect()->route('partnerships.index')
            ->with('success', 'Partnership deleted successfully');
    }
}
