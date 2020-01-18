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

// Route::get('/team', function () {
//     return view('team');
// });

Route::get('/home', 'HomeController@show')->middleware('auth');
Route::get('/leaderboard', 'PagesController@leaderboard')->middleware('auth');

Route::middleware('event_start_check')->group(function () {
    Route::get('/playarea', 'PlayAreaController@show')->middleware('auth', 'event_start_check');
    Route::post('/playarea/{question}/submit', 'PlayAreaController@postAnswer')->middleware('auth');
    Route::get('/question_attachments/{attachment}', 'QuestionAttachmentController@show')->middleware('auth');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', 'Admin\PagesController@dashboard')->name('admin.dashboard');
    Route::get('participants', 'Admin\PagesController@participants')->name('admin.participants');
    Route::get('questions', 'Admin\QuestionController@index')->name('admin.question.index');
    Route::get('question/create', 'Admin\QuestionController@create')->name('admin.question.create');
    Route::post('questions', 'Admin\QuestionController@store')->name('admin.question.store');
    Route::get('question/{question}/show', 'Admin\QuestionController@show')->name('admin.question.show');
    Route::delete('question/{question}/delete', 'Admin\QuestionController@delete')->name('admin.question.delete');

    Route::get('question/{question}/hint/{hint}/set', 'Admin\QuestionHintController@setVisible')
        ->name('admin.question.hint.set');

    Route::get('question/{question}/hint/{hint}/unset', 'Admin\QuestionHintController@unsetVisible')
        ->name('admin.question.hint.unset');

    Route::post('event-start', 'Admin\EventController@start')->name('admin.event.start');

    Route::post('event-end', 'Admin\EventController@end')->name('admin.event.end');
});
