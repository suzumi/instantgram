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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/test', function() {
    return view('test');
});

Route::auth();

Route::get('/', 'HomeController@index');

Route::get('/upload', 'HomeController@upload');

Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::post('upload', 'ImageController@upload');
    Route::get('home', 'ImageController@home');
});
