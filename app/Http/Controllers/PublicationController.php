<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

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
        request()->validate(Publication::$rules);

        $publication = Publication::create($request->all());

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
        request()->validate(Publication::$rules);

        $publication->update($request->all());

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
        $publication = Publication::find($id)->delete();

        return redirect()->route('publications.index')
            ->with('success', 'Publication deleted successfully');
    }
}
