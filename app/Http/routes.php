<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('myevent','EventController@index');
Route::get('createevent','EventController@create');
Route::resource('events','EventController');
Route::get('/home', 'HomeController@index');
Route::get('profile','ProfileController@index');
Route::resource('eventsdetail','EventController@detail');
