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

Route::get('/playarea', 'PlayAreaController@show')->middleware('auth');
Route::post('/playarea/{question}/submit', 'PlayAreaController@postAnswer')->middleware('auth');

Route::get('/question_attachments/{attachment}', 'QuestionAttachmentController@show')->middleware('auth');

Route::get('/home', 'HomeController@show')->middleware('auth');
