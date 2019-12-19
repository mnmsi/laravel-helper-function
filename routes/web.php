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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helper', 'HelperController@index');
Route::get('/anotherhelper', 'HelperController@anotherhelper');
Route::get('/third', 'HelperController@third');


// class helper function-------------------------------->
Route::get('/chfirst', 'ClassHelperController@First');
Route::get('/chsecond', 'ClassHelperController@Second');
