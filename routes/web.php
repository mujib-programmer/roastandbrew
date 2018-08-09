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

// This will set up the controller to return the app view along with the middleware to block off by only authenticated users.
Route::get( '/', 'Web\AppController@getApp' )
      ->middleware('auth');
