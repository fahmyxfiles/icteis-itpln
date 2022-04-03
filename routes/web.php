<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventSocialMediaController;
use App\Http\Controllers\ImportantDateController;
use App\Http\Controllers\TopicOfInterestController;
use App\Http\Controllers\TopicOfInterestScopeController;
use App\Http\Controllers\CommitteeDivisionController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\FeeTypeController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\SpeakerSocialProfileController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\ReviewerSocialProfileController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GuidelineController;
use App\Http\Controllers\PublicationFieldController;
use App\Http\Controllers\PublicationTagController;
use App\Http\Controllers\PublicationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('web.home');
Route::get('/speakers/{id_slug}', [WebController::class, 'speakers'])->name('web.speakers');
Route::get('/reviewers/{id_slug}', [WebController::class, 'reviewers'])->name('web.reviewers');
Route::get('/call-for-paper', [WebController::class, 'call_for_paper'])->name('web.call-for-paper');
Route::get('/guidelines/{id_slug?}', [WebController::class, 'guidelines'])->name('web.guidelines');
Route::get('/documents/{id_slug?}', [WebController::class, 'documents'])->name('web.documents');

Route::group(['prefix' => 'admin'], function(){
    //All the routes that belongs to the group goes here
    Route::middleware('auth')->group(function () {
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::resource('events', EventController::class);
        Route::resource('event-social-medias', EventSocialMediaController::class);
        Route::resource('important-dates', ImportantDateController::class);
        Route::resource('topic-of-interests', TopicOfInterestController::class);
        Route::resource('topic-of-interest-scopes', TopicOfInterestScopeController::class);
        Route::resource('committee-divisions', CommitteeDivisionController::class);
        Route::resource('committees', CommitteeController::class);
        Route::resource('fee-types', FeeTypeController::class);
        Route::resource('partnerships', PartnershipController::class);
        Route::resource('settings', SettingController::class);

        Route::resource('speakers', SpeakerController::class);
        Route::resource('speaker-social-profiles', SpeakerSocialProfileController::class);
        Route::resource('reviewers', ReviewerController::class);
        Route::resource('reviewer-social-profiles', ReviewerSocialProfileController::class);

        Route::resource('documents', DocumentController::class);
        Route::resource('guidelines', GuidelineController::class);

        Route::resource('publication-fields', PublicationFieldController::class);
        Route::resource('publication-tags', PublicationTagController::class);
        Route::resource('publications', PublicationController::class);
    });
    require __DIR__ . '/auth.php';
});
