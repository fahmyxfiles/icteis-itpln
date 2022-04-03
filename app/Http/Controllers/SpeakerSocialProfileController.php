<?php

namespace App\Http\Controllers;

use App\Models\SpeakerSocialProfile;
use Illuminate\Http\Request;

/**
 * Class SpeakerSocialProfileController
 * @package App\Http\Controllers
 */
class SpeakerSocialProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakerSocialProfiles = SpeakerSocialProfile::paginate();

        return view('speaker-social-profile.index', compact('speakerSocialProfiles'))
            ->with('i', (request()->input('page', 1) - 1) * $speakerSocialProfiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $speakerSocialProfile = new SpeakerSocialProfile();
        return view('speaker-social-profile.create', compact('speakerSocialProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(SpeakerSocialProfile::$rules);

        $speakerSocialProfile = SpeakerSocialProfile::create($request->all());

        return redirect()->route('speaker-social-profiles.index')
            ->with('success', 'SpeakerSocialProfile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $speakerSocialProfile = SpeakerSocialProfile::find($id);

        return view('speaker-social-profile.show', compact('speakerSocialProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speakerSocialProfile = SpeakerSocialProfile::find($id);

        return view('speaker-social-profile.edit', compact('speakerSocialProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SpeakerSocialProfile $speakerSocialProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpeakerSocialProfile $speakerSocialProfile)
    {
        request()->validate(SpeakerSocialProfile::$rules);

        $speakerSocialProfile->update($request->all());

        return redirect()->route('speaker-social-profiles.index')
            ->with('success', 'SpeakerSocialProfile updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $speakerSocialProfile = SpeakerSocialProfile::find($id)->delete();

        return redirect()->route('speaker-social-profiles.index')
            ->with('success', 'SpeakerSocialProfile deleted successfully');
    }
}
