<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Speaker;
use App\Models\Reviewer;
use App\Models\Committee;
use App\Models\Partnership;
use App\Models\Event;
use App\Models\CommitteeDivision;
use App\Models\ImportantDate;
use App\Models\TopicOfInterest;


use Illuminate\Support\Str;

class WebController extends Controller
{
    public function index(Request $request){
        $event = Event::find(1);
        $speakers = Speaker::where('role', "MAIN")->take(6)->get();
        $reviewers = Reviewer::where('role', "MAIN")->take(6)->get();
        $sideReviewers = Reviewer::where('role', "SIDE")->get();
        $partnerships = Partnership::all();
        $committeeDivisions = CommitteeDivision::all();
        return view('pages.home', compact('event', 'speakers', 'reviewers', 'sideReviewers', 'partnerships', 'committeeDivisions'));
    }

    public function speakers(Request $request, $id_slug){
        if ($id_slug)
        {
            $id = Str::of($id_slug)->explode("-")[0];
            $speaker = Speaker::find($id);
            if($speaker)
            {
                return view('pages.speaker-detail', compact('speaker'));
            }
            else{
                abort(404);
            }
        }
        return abort(404);
    }
    public function reviewers(Request $request, $id_slug){
        if ($id_slug)
        {
            $id = Str::of($id_slug)->explode("-")[0];
            $reviewer = Reviewer::find($id);
            if($reviewer)
            {
                return view('pages.reviewer-detail', compact('reviewer'));
            }
            else{
                abort(404);
            }
        }
        return abort(404);
    }
    public function call_for_paper(Request $request){
        $important_dates = ImportantDate::all();
        $topic_of_interests = TopicOfInterest::all();
        return view('pages.call-for-paper', compact('important_dates', 'topic_of_interests'));
    }
    public function guidelines(Request $request){

    }
    public function documents(Request $request){

    }
    public function fee(Request $request){

    }
    public function publication(Request $request){

    }
}
