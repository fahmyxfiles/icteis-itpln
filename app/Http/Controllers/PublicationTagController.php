<?php

namespace App\Http\Controllers;

use App\Models\PublicationTag;
use Illuminate\Http\Request;

/**
 * Class PublicationTagController
 * @package App\Http\Controllers
 */
class PublicationTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicationTags = PublicationTag::paginate();

        return view('publication-tag.index', compact('publicationTags'))
            ->with('i', (request()->input('page', 1) - 1) * $publicationTags->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publicationTag = new PublicationTag();
        return view('publication-tag.create', compact('publicationTag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PublicationTag::$rules);

        $publicationTag = PublicationTag::create($request->all());

        return redirect()->route('publication-tags.index')
            ->with('success', 'PublicationTag created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicationTag = PublicationTag::find($id);

        return view('publication-tag.show', compact('publicationTag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicationTag = PublicationTag::find($id);

        return view('publication-tag.edit', compact('publicationTag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PublicationTag $publicationTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicationTag $publicationTag)
    {
        request()->validate(PublicationTag::$rules);

        $publicationTag->update($request->all());

        return redirect()->route('publication-tags.index')
            ->with('success', 'PublicationTag updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $publicationTag = PublicationTag::find($id)->delete();

        return redirect()->route('publication-tags.index')
            ->with('success', 'PublicationTag deleted successfully');
    }
}
