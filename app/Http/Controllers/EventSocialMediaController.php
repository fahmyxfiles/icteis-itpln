<?php

namespace App\Http\Controllers;

use App\Models\EventSocialMedia;
use Illuminate\Http\Request;

/**
 * Class EventSocialMediaController
 * @package App\Http\Controllers
 */
class EventSocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventSocialMedias = EventSocialMedia::paginate();

        return view('event-social-media.index', compact('eventSocialMedias'))
            ->with('i', (request()->input('page', 1) - 1) * $eventSocialMedias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventSocialMedia = new EventSocialMedia();
        return view('event-social-media.create', compact('eventSocialMedia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EventSocialMedia::$rules);

        $eventSocialMedia = EventSocialMedia::create($request->all());

        return redirect()->route('event-social-medias.index')
            ->with('success', 'EventSocialMedia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eventSocialMedia = EventSocialMedia::find($id);

        return view('event-social-media.show', compact('eventSocialMedia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eventSocialMedia = EventSocialMedia::find($id);

        return view('event-social-media.edit', compact('eventSocialMedia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EventSocialMedia $eventSocialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EventSocialMedia $eventSocialMedia)
    {
        request()->validate(EventSocialMedia::$rules);

        $eventSocialMedia->update($request->all());

        return redirect()->route('event-social-medias.index')
            ->with('success', 'EventSocialMedia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $eventSocialMedia = EventSocialMedia::find($id)->delete();

        return redirect()->route('event-social-medias.index')
            ->with('success', 'EventSocialMedia deleted successfully');
    }
}
