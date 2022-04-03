<?php

namespace App\Http\Controllers;

use App\Models\FeeType;
use Illuminate\Http\Request;

/**
 * Class FeeTypeController
 * @package App\Http\Controllers
 */
class FeeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feeTypes = FeeType::paginate();

        return view('fee-type.index', compact('feeTypes'))
            ->with('i', (request()->input('page', 1) - 1) * $feeTypes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $feeType = new FeeType();
        return view('fee-type.create', compact('feeType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FeeType::$rules);

        $feeType = FeeType::create($request->all());

        return redirect()->route('fee-types.index')
            ->with('success', 'FeeType created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feeType = FeeType::find($id);

        return view('fee-type.show', compact('feeType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feeType = FeeType::find($id);

        return view('fee-type.edit', compact('feeType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FeeType $feeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeType $feeType)
    {
        request()->validate(FeeType::$rules);

        $feeType->update($request->all());

        return redirect()->route('fee-types.index')
            ->with('success', 'FeeType updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $feeType = FeeType::find($id)->delete();

        return redirect()->route('fee-types.index')
            ->with('success', 'FeeType deleted successfully');
    }
}
