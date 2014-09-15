<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::post('/', 'HomeController@validate');
Route::get('logout', 'HomeController@logout');

Route::resource('survey', 'SurveyController');

Route::get('test', function(){
	$u = new User();
	Func::printr($u->surveyComplete(1, 1));
//	return View::make('test');
});