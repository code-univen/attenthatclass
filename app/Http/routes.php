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

Route::get('/', 'WelcomeController@index');

// Redirect to github to authenticate
Route::get('github', 'AccountController@github_redirect');
// Get back to redirect url
Route::get('account/github', 'AccountController@github');

Route::get('google', 'AccountController@google_redirect');
Route::get('account/google', 'AccountController@google');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
