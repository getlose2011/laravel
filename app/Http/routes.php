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

Route::get('user/{id}', function ($id) {
    return $id;
});

Route::get('user_name/{name?}', function ($name = null) {
    return 'user_name'.$name;
});

Route::match(['get', 'post', 'put'], '/test', function () {
    return 'test';
});
