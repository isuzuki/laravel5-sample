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


Route::group(['prefix' => 'hello'], function()
{
	Route::get('/', 'HelloController@index');

	Route::get('route', function()
	{
		return 'Hello World!!';
	});

	Route::get('view', function()
	{
		return view('hello.index');
	});
});

// 以下は初期ルーティング
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
