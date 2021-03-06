<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/** Socialite Apple **/
Route::get('socialite/{provider}', 'SocialiteAppleController@redirectToProvider');
Route::any('socialite/{provider}/callback', 'SocialiteAppleController@handleProviderCallback');
Route::any('socialite/{provider}/token', 'SocialiteAppleController@tokenCallback');
