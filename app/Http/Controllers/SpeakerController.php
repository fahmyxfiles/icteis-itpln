<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Image;

/**
 * Class SpeakerController
 * @package App\Http\Controllers
 */
class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speaker::paginate();

        return view('speaker.index', compact('speakers'))
            ->with('i', (request()->input('page', 1) - 1) * $speakers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speaker = new Speaker();
        return view('speaker.create', compact('speaker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Speaker::$rules);

        $profile_photo = $request->file('profile_photo');
        $filename = sha1($request->input('name') . Str::random(20)).'.jpg'; 
        $profile_photo_filepath = "images/speaker/".$filename;
        Storage::disk('public')->makeDirectory(dirname($profile_photo_filepath));
        $resizeImage = Image::make($profile_photo)->fit(256, 270, function ($constraint) {
            $constraint->upsize();
        })->encode('jpg', 100)->save(Storage::disk('public')->path($profile_photo_filepath));

        $data = $request->all();
        unset($data['profile_photo']);
        $data['profile_photo'] = $profile_photo_filepath;

        $speaker = Speaker::create($data);

        return redirect()->route('speakers.index')
            ->with('success', 'Speaker created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $speaker = Speaker::find($id);

        return view('speaker.show', compact('speaker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speaker = Speaker::find($id);

        return view('speaker.edit', compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Speaker $speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speaker)
    {
        request()->validate(Speaker::$rules);

        $data = $request->all();
        if(request()->has('profile_photo')){
            $profile_photo = $request->file('profile_photo');
            $profile_photo_filepath = $speaker->profile_photo;
            Storage::disk('public')->makeDirectory(dirname($profile_photo_filepath));
            $resizeImage = Image::make($profile_photo)->fit(256, 270, function ($constraint) {
                $constraint->upsize();
            })->encode('jpg', 100)->save(Storage::disk('public')->path($profile_photo_filepath));

            unset($data['profile_photo']);
            $data['profile_photo'] = $profile_photo_filepath;
        }

        $speaker->update($data);

        return redirect()->route('speakers.index')
            ->with('success', 'Speaker updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $speaker = Speaker::find($id);
        unlink(Storage::disk('public')->path($speaker->profile_photo));
        $speaker->delete();
        return redirect()->route('speakers.index')
            ->with('success', 'Speaker deleted successfully');
    }
}
