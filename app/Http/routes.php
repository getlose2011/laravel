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

//Named Routes(第一種用法)
Route::get('user', ['as' => 'profile', function () {
    echo Route('profile');//Generating URLs To Named Routes
    return '<h1>命名</h1>';
}]);

//第二種用法
Route::get('user1', [
    'as' => 'profile', 'uses' => 'Admin\IndexController@index'
]);

//第三種用法
Route::get('user2', 'Admin\IndexController@index')->name('profile');

//Route::get('manned', 'MannedController@test');
//
//Route::get('command', 'CommandController@test');
//
//Route::get('admin/index', 'Admin\IndexController@index');