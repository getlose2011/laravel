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

Route::get('view/env', 'ViewController@env');

Route::get('/', 'IndexController@index');

//
//Route::get('view', 'ViewController@index');
//
//Route::get('/', function () {
//    return view('index');
//});
//
//Route::get('view/layouts', 'ViewController@layouts');
//
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=>['web','adminlogin']], function () {
//    Route::get('index', 'IndexController@index');
//    Route::get('logout', 'IndexController@logout');
//    Route::resource('article', 'ArticleController');//資源控制器路由
//});
