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

// Route::get('/signup', function () {
//     return view('signup');
// });

Route::get('signup', 'RegisterController@index');	
Route::post('store', 'RegisterController@store');
Route::get('signin', 'RegisterController@signin');




Route::auth();
Route::get('/home', 'HomeController@index');

// Route::auth();

// Route::get('/home', 'HomeController@index');
Route::get('/Post_Form', 'HomeController@post_form');
