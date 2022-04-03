<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use Illuminate\Http\Request;

/**
 * Class GuidelineController
 * @package App\Http\Controllers
 */
class GuidelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guidelines = Guideline::paginate();

        return view('guideline.index', compact('guidelines'))
            ->with('i', (request()->input('page', 1) - 1) * $guidelines->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guideline = new Guideline();
        return view('guideline.create', compact('guideline'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Guideline::$rules);

        $guideline = Guideline::create($request->all());

        return redirect()->route('guidelines.index')
            ->with('success', 'Guideline created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guideline = Guideline::find($id);

        return view('guideline.show', compact('guideline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guideline = Guideline::find($id);

        return view('guideline.edit', compact('guideline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Guideline $guideline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guideline $guideline)
    {
        request()->validate(Guideline::$rules);

        $guideline->update($request->all());

        return redirect()->route('guidelines.index')
            ->with('success', 'Guideline updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $guideline = Guideline::find($id)->delete();

        return redirect()->route('guidelines.index')
            ->with('success', 'Guideline deleted successfully');
    }
}
