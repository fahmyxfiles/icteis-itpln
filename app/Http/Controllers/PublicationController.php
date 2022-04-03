<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Image;

/**
 * Class PublicationController
 * @package App\Http\Controllers
 */
class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publications = Publication::paginate();

        return view('publication.index', compact('publications'))
            ->with('i', (request()->input('page', 1) - 1) * $publications->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publication = new Publication();
        return view('publication.create', compact('publication'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Publication::$createRules);

        $cover_image = $request->file('cover_image');
        $filename = sha1($request->input('name') . Str::random(20)).'.jpg'; 
        $cover_image_filepath = "images/publication/".$filename;
        Storage::disk('public')->makeDirectory(dirname($cover_image_filepath));
        $resizeImage = Image::make($cover_image)->fit(363, 513, function ($constraint) {
            $constraint->upsize();
        })->encode('jpg', 100)->save(Storage::disk('public')->path($cover_image_filepath));

        $data = $request->all();
        unset($data['cover_image']);
        $data['cover_image'] = $cover_image_filepath;

        $publication = Publication::create($data);

        if($request->has('publication_tag_id')){
            $publication->publication_tags()->sync($request->input('publication_tag_id'));
        }

        return redirect()->route('publications.index')
            ->with('success', 'Publication created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publication = Publication::find($id);

        return view('publication.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publication = Publication::find($id);

        return view('publication.edit', compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Publication $publication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publication $publication)
    {
        request()->validate(Publication::$updateRules);

        $data = $request->all();
        if(request()->has('cover_image')){
            $cover_image = $request->file('cover_image');
            $cover_image_filepath = $publication->cover_image;
            Storage::disk('public')->makeDirectory(dirname($cover_image_filepath));
            $resizeImage = Image::make($cover_image)->fit(363, 513, function ($constraint) {
                $constraint->upsize();
            })->encode('jpg', 100)->save(Storage::disk('public')->path($cover_image_filepath));

            unset($data['cover_image']);
            $data['cover_image'] = $cover_image_filepath;
        }

        if($request->has('publication_tag_id')){
            $publication->publication_tags()->sync($request->input('publication_tag_id'));
        }

        $publication->update($data);

        return redirect()->route('publications.index')
            ->with('success', 'Publication updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $publication = Publication::find($id);
        unlink(Storage::disk('public')->path($publication->cover_image));
        $publication->publication_tags()->detach();
        $publication->delete();

        return redirect()->route('publications.index')
            ->with('success', 'Publication deleted successfully');
    }
}
