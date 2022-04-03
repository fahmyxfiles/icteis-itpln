<?php

namespace App\Http\Controllers;

use App\Models\Reviewer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Image;

/**
 * Class ReviewerController
 * @package App\Http\Controllers
 */
class ReviewerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviewers = Reviewer::paginate();

        return view('reviewer.index', compact('reviewers'))
            ->with('i', (request()->input('page', 1) - 1) * $reviewers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviewer = new Reviewer();
        return view('reviewer.create', compact('reviewer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Reviewer::$rules);

        $profile_photo = $request->file('profile_photo');
        $filename = sha1($request->input('name') . Str::random(20)).'.jpg'; 
        $profile_photo_filepath = "images/reviewer/".$filename;
        Storage::disk('public')->makeDirectory(dirname($profile_photo_filepath));
        $resizeImage = Image::make($profile_photo)->fit(256, 270, function ($constraint) {
            $constraint->upsize();
        })->encode('jpg', 100)->save(Storage::disk('public')->path($profile_photo_filepath));

        $data = $request->all();
        unset($data['profile_photo']);
        $data['profile_photo'] = $profile_photo_filepath;

        $reviewer = Reviewer::create($data);

        return redirect()->route('reviewers.index')
            ->with('success', 'Reviewer created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reviewer = Reviewer::find($id);

        return view('reviewer.show', compact('reviewer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reviewer = Reviewer::find($id);

        return view('reviewer.edit', compact('reviewer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Reviewer $reviewer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reviewer $reviewer)
    {
        request()->validate(Reviewer::$rules);

        $data = $request->all();
        if(request()->has('profile_photo')){
            $profile_photo = $request->file('profile_photo');
            $profile_photo_filepath = $reviewer->profile_photo;
            Storage::disk('public')->makeDirectory(dirname($profile_photo_filepath));
            $resizeImage = Image::make($profile_photo)->fit(256, 270, function ($constraint) {
                $constraint->upsize();
            })->encode('jpg', 100)->save(Storage::disk('public')->path($profile_photo_filepath));

            unset($data['profile_photo']);
            $data['profile_photo'] = $profile_photo_filepath;
        }

        $reviewer->update($data);

        return redirect()->route('reviewers.index')
            ->with('success', 'Reviewer updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $reviewer = Reviewer::find($id);
        unlink(Storage::disk('public')->path($reviewer->profile_photo));
        $reviewer->delete();

        return redirect()->route('reviewers.index')
            ->with('success', 'Reviewer deleted successfully');
    }
}
