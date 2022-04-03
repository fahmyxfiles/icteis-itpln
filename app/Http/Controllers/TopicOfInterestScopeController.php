<?php

namespace App\Http\Controllers;

use App\Models\TopicOfInterestScope;
use Illuminate\Http\Request;

/**
 * Class TopicOfInterestScopeController
 * @package App\Http\Controllers
 */
class TopicOfInterestScopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topicOfInterestScopes = TopicOfInterestScope::paginate();

        return view('topic-of-interest-scope.index', compact('topicOfInterestScopes'))
            ->with('i', (request()->input('page', 1) - 1) * $topicOfInterestScopes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topicOfInterestScope = new TopicOfInterestScope();
        return view('topic-of-interest-scope.create', compact('topicOfInterestScope'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TopicOfInterestScope::$rules);

        $topicOfInterestScope = TopicOfInterestScope::create($request->all());

        return redirect()->route('topic-of-interest-scopes.index')
            ->with('success', 'TopicOfInterestScope created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topicOfInterestScope = TopicOfInterestScope::find($id);

        return view('topic-of-interest-scope.show', compact('topicOfInterestScope'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topicOfInterestScope = TopicOfInterestScope::find($id);

        return view('topic-of-interest-scope.edit', compact('topicOfInterestScope'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TopicOfInterestScope $topicOfInterestScope
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopicOfInterestScope $topicOfInterestScope)
    {
        request()->validate(TopicOfInterestScope::$rules);

        $topicOfInterestScope->update($request->all());

        return redirect()->route('topic-of-interest-scopes.index')
            ->with('success', 'TopicOfInterestScope updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $topicOfInterestScope = TopicOfInterestScope::find($id)->delete();

        return redirect()->route('topic-of-interest-scopes.index')
            ->with('success', 'TopicOfInterestScope deleted successfully');
    }
}
