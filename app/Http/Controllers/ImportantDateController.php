<?php

namespace App\Http\Controllers;

use App\Models\ImportantDate;
use Illuminate\Http\Request;

/**
 * Class ImportantDateController
 * @package App\Http\Controllers
 */
class ImportantDateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $importantDates = ImportantDate::paginate();

        return view('important-date.index', compact('importantDates'))
            ->with('i', (request()->input('page', 1) - 1) * $importantDates->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $importantDate = new ImportantDate();
        return view('important-date.create', compact('importantDate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ImportantDate::$rules);

        $importantDate = ImportantDate::create($request->all());

        return redirect()->route('important-dates.index')
            ->with('success', 'ImportantDate created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $importantDate = ImportantDate::find($id);

        return view('important-date.show', compact('importantDate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $importantDate = ImportantDate::find($id);

        return view('important-date.edit', compact('importantDate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ImportantDate $importantDate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImportantDate $importantDate)
    {
        request()->validate(ImportantDate::$rules);

        $importantDate->update($request->all());

        return redirect()->route('important-dates.index')
            ->with('success', 'ImportantDate updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $importantDate = ImportantDate::find($id)->delete();

        return redirect()->route('important-dates.index')
            ->with('success', 'ImportantDate deleted successfully');
    }
}
