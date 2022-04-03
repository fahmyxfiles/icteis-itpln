<?php

namespace App\Http\Controllers;

use App\Models\CommitteeDivision;
use Illuminate\Http\Request;

/**
 * Class CommitteeDivisionController
 * @package App\Http\Controllers
 */
class CommitteeDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committeeDivisions = CommitteeDivision::paginate();

        return view('committee-division.index', compact('committeeDivisions'))
            ->with('i', (request()->input('page', 1) - 1) * $committeeDivisions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $committeeDivision = new CommitteeDivision();
        return view('committee-division.create', compact('committeeDivision'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CommitteeDivision::$rules);

        $committeeDivision = CommitteeDivision::create($request->all());

        return redirect()->route('committee-divisions.index')
            ->with('success', 'CommitteeDivision created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $committeeDivision = CommitteeDivision::find($id);

        return view('committee-division.show', compact('committeeDivision'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $committeeDivision = CommitteeDivision::find($id);

        return view('committee-division.edit', compact('committeeDivision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CommitteeDivision $committeeDivision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CommitteeDivision $committeeDivision)
    {
        request()->validate(CommitteeDivision::$rules);

        $committeeDivision->update($request->all());

        return redirect()->route('committee-divisions.index')
            ->with('success', 'CommitteeDivision updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $committeeDivision = CommitteeDivision::find($id)->delete();

        return redirect()->route('committee-divisions.index')
            ->with('success', 'CommitteeDivision deleted successfully');
    }
}
