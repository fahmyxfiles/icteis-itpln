<?php

namespace App\Http\Controllers;

use App\Models\TopicOfInterest;
use Illuminate\Http\Request;

/**
 * Class TopicOfInterestController
 * @package App\Http\Controllers
 */
class TopicOfInterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topicOfInterests = TopicOfInterest::paginate();

        return view('topic-of-interest.index', compact('topicOfInterests'))
            ->with('i', (request()->input('page', 1) - 1) * $topicOfInterests->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topicOfInterest = new TopicOfInterest();
        return view('topic-of-interest.create', compact('topicOfInterest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TopicOfInterest::$rules);

        $topicOfInterest = TopicOfInterest::create($request->all());

        return redirect()->route('topic-of-interests.index')
            ->with('success', 'TopicOfInterest created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topicOfInterest = TopicOfInterest::find($id);

        return view('topic-of-interest.show', compact('topicOfInterest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topicOfInterest = TopicOfInterest::find($id);

        return view('topic-of-interest.edit', compact('topicOfInterest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TopicOfInterest $topicOfInterest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopicOfInterest $topicOfInterest)
    {
        request()->validate(TopicOfInterest::$rules);

        $topicOfInterest->update($request->all());

        return redirect()->route('topic-of-interests.index')
            ->with('success', 'TopicOfInterest updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $topicOfInterest = TopicOfInterest::find($id)->delete();

        return redirect()->route('topic-of-interests.index')
            ->with('success', 'TopicOfInterest deleted successfully');
    }
}
