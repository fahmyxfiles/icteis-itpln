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
use App\Models\Guideline;
use App\Models\Document;
use App\Models\FeeType;


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
    public function guidelines(Request $request, $id_slug = null){
        if ($id_slug)
        {
            $id = Str::of($id_slug)->explode("-")[0];
            $guideline = Guideline::find($id);
            if($guideline)
            {

                $otherGuidelines = Guideline::where('published', 'published');
                $guidelinesCount = $otherGuidelines->count();
                $otherGuidelines = $otherGuidelines->orderBy('updated_at', 'desc')->take(5)->get();

                $documents = Document::where('published', 'published');
                $documentsCount = $documents->count();
                $documents = $documents->orderBy('updated_at', 'desc')->take(5)->get();
                return view('pages.guideline-show', compact('guideline', 'otherGuidelines', 'guidelinesCount', 'documents', 'documentsCount'));
            }
            else{
                abort(404);
            }
        }
        else {
            $guidelines = Guideline::where('published', 'published')->get();
            return view('pages.guideline-list', compact('guidelines'));
        }
    }
    public function documents(Request $request, $id_slug = null){
        if ($id_slug)
        {
            $id = Str::of($id_slug)->explode("-")[0];
            $document = Document::find($id);
            if($document)
            {
                return redirect(asset('storage/' . $document->file_path));
            }
            else{
                abort(404);
            }
        }
        else {
            $documents = Document::where('published', 'published')->get();
            return view('pages.document-list', compact('documents'));
        }
    }
    public function fee(Request $request){
        $feetypes = FeeType::all();
        return view('pages.fee', compact('feetypes'));

    }
    public function publications(Request $request){

    }
}
