<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeController@show')->middleware('guest');
Route::get('/facebook/login', 'Auth\FacebookLoginController@redirectToProvider')->middleware('guest');
Route::get('/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback')->middleware('guest');
Route::get('/google/login', 'Auth\GoogleLoginController@redirectToProvider')->middleware('guest');
Route::get('/google/callback', 'Auth\GoogleLoginController@handleProviderCallback')->middleware('guest');
Route::post('/logout', 'Auth\LoginController@logout')->middleware('auth');
Route::get('/about', function () {
    return view('about');
});

Route::get('/rules', function () {
    return view('rules');
});

Route::get('/home', 'HomeController@show')->middleware('auth');
Route::get('/leaderboard', 'PagesController@leaderboard')->middleware(['event_start_check', 'auth']);
Route::get('/notifications', 'PagesController@notifications')->middleware('auth');

Route::middleware(['event_start_check', 'disqualify_participant_check'])->group(function () {
    Route::get('/playarea', 'PlayAreaController@show')->middleware('auth');
    Route::post('/playarea', 'PlayAreaController@postAnswer')->middleware('auth');
    Route::get('/question_attachments/{attachment}', 'QuestionAttachmentController@show')->middleware('auth');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', 'Admin\PagesController@dashboard')->name('admin.dashboard');
    Route::get('participants', 'Admin\PagesController@participants')->name('admin.participants');
    Route::get('participants/{user}/tries', 'Admin\PagesController@participantsTries');

    Route::get('questions', 'Admin\QuestionController@index')->name('admin.questions.index');
    Route::get('questions/create', 'Admin\QuestionController@create')->name('admin.questions.create');
    Route::post('questions', 'Admin\QuestionController@store')->name('admin.questions.store');
    Route::patch('questions/{question}', 'Admin\QuestionController@update')->name('admin.questions.update');
    Route::get('questions/{question}/show', 'Admin\QuestionController@show')->name('admin.questions.show');
    Route::get('questions/{question}/edit', 'Admin\QuestionController@edit')->name('admin.questions.edit');
    Route::delete('question/{question}/delete', 'Admin\QuestionController@delete')->name('admin.questions.delete');

    Route::post('questions/{question}/hints/create', 'Admin\QuestionHintController@create')->name('admin.questions.hints.create');
    Route::delete('hints/{hint}/delete', 'Admin\QuestionHintController@delete')->name('admin.questions.hints.delete');

    Route::get('hints/{hint}/edit', 'Admin\QuestionHintController@edit')->name('admin.questions.hints.edit');
    Route::post('hints/{hint}/update', 'Admin\QuestionHintController@update')->name('admin.questions.hints.update');

    Route::post('event-start', 'Admin\EventController@start')->name('admin.event.start');

    Route::post('event-end', 'Admin\EventController@end')->name('admin.event.end');

    Route::get('participants/{participant}/disqualify', 'Admin\ParticipantsController@disqualify');
    Route::get('participants/{participant}/undisqualify', 'Admin\ParticipantsController@undisqualify');

    Route::get('message/create', 'Admin\MessageController@create')->name('admin.message.create');
    Route::post('message', 'Admin\MessageController@send')->name('admin.message.notify');
});
