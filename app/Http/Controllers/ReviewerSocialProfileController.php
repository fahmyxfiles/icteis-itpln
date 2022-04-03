<?php

namespace App\Http\Controllers;

use App\Models\ReviewerSocialProfile;
use Illuminate\Http\Request;

/**
 * Class ReviewerSocialProfileController
 * @package App\Http\Controllers
 */
class ReviewerSocialProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewerSocialProfiles = ReviewerSocialProfile::paginate();

        return view('reviewer-social-profile.index', compact('reviewerSocialProfiles'))
            ->with('i', (request()->input('page', 1) - 1) * $reviewerSocialProfiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviewerSocialProfile = new ReviewerSocialProfile();
        return view('reviewer-social-profile.create', compact('reviewerSocialProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ReviewerSocialProfile::$rules);

        $reviewerSocialProfile = ReviewerSocialProfile::create($request->all());

        return redirect()->route('reviewer-social-profiles.index')
            ->with('success', 'ReviewerSocialProfile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviewerSocialProfile = ReviewerSocialProfile::find($id);

        return view('reviewer-social-profile.show', compact('reviewerSocialProfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviewerSocialProfile = ReviewerSocialProfile::find($id);

        return view('reviewer-social-profile.edit', compact('reviewerSocialProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ReviewerSocialProfile $reviewerSocialProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReviewerSocialProfile $reviewerSocialProfile)
    {
        request()->validate(ReviewerSocialProfile::$rules);

        $reviewerSocialProfile->update($request->all());

        return redirect()->route('reviewer-social-profiles.index')
            ->with('success', 'ReviewerSocialProfile updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reviewerSocialProfile = ReviewerSocialProfile::find($id)->delete();

        return redirect()->route('reviewer-social-profiles.index')
            ->with('success', 'ReviewerSocialProfile deleted successfully');
    }
}
