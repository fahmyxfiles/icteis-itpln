<?php

namespace App\Http\Controllers;

use App\Models\PublicationField;
use Illuminate\Http\Request;

/**
 * Class PublicationFieldController
 * @package App\Http\Controllers
 */
class PublicationFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicationFields = PublicationField::paginate();

        return view('publication-field.index', compact('publicationFields'))
            ->with('i', (request()->input('page', 1) - 1) * $publicationFields->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $publicationField = new PublicationField();
        return view('publication-field.create', compact('publicationField'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PublicationField::$rules);

        $publicationField = PublicationField::create($request->all());

        return redirect()->route('publication-fields.index')
            ->with('success', 'PublicationField created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicationField = PublicationField::find($id);

        return view('publication-field.show', compact('publicationField'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicationField = PublicationField::find($id);

        return view('publication-field.edit', compact('publicationField'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PublicationField $publicationField
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicationField $publicationField)
    {
        request()->validate(PublicationField::$rules);

        $publicationField->update($request->all());

        return redirect()->route('publication-fields.index')
            ->with('success', 'PublicationField updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $publicationField = PublicationField::find($id)->delete();

        return redirect()->route('publication-fields.index')
            ->with('success', 'PublicationField deleted successfully');
    }
}
