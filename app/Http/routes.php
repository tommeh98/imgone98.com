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


Route::get('/aboutMe', function() {
	return view('aboutMe');
});

Route::get('/contactMe', function() {
	return view('contactMe');
});

Route::get('/', function() {
	return Redirect::to('/1');
});

Route::get('/{page?}', 'PostController@index');
Route::get('/blog/{url_title?}', 'PostController@show');

Route::get('/archive/{filter?}/{order?}', 'ArchiveController@displayAll');

Route::post('/archive/{filter?}/{order?}', 'ArchiveController@displayAll');