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

Route::get('/','WelcomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shout', 'HomeController@shout')->name('shout');
Route::post('/shout/save-post', 'HomeController@savePost')->name('shout.save');
Route::get('/shout/{nickname}', 'HomeController@publiTimeline')->name('shout.publictimeline');

Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/profile/update', 'ProfileController@profileUpdate')->name('profile.update');\

Route::get('/shout/public/make-friend/{friendId}', 'HomeController@makeFriend')->name('shout.public.friend');
Route::get('/shout/public/make-unfriend/{friendId}', 'HomeController@makeUnfriend')->name('shout.public.unfriend');