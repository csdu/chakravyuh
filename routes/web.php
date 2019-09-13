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

Route::get('/', 'WelcomeController@show');
Route::get('/home', 'HomeController@show')->middleware('auth');

Route::get('/facebook/login', 'Auth\FacebookLoginController@redirectToProvider');
Route::get('/facebook/callback', 'Auth\FacebookLoginController@handleProviderCallback');
Route::get('/google/login', 'Auth\GoogleLoginController@redirectToProvider');
Route::get('/google/callback', 'Auth\GoogleLoginController@handleProviderCallback');

Route::post('/logout', 'Auth\LoginController@logout');