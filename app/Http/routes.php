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

//第一種分配view
//Route::get('/view', function () {
//        return view('my_laravel');
//});
//第二種分配view,由controller
Route::get('view', 'ViewController@index');

//正常要加'middleware' => ['web'] 才可以用session,但沒加也是可以用不知是否為版本問題
//Route::group(['middleware' => ['web']], function () {
//    Route::get('admin/login', 'Admin\IndexController@login');
//    
//    Route::get('/', function () {
//        return view('welcome');
//    });
//
//    Route::get('/test_session', function () {        
//        return 'test_session';
//    });
//});

//Route Groups 路由分組的前綴詞
//Route::get('admin/login', 'Admin\IndexController@login');
//Route::get('admin/index', 'Admin\IndexController@index');
//把相同的admin加入prefix , 相同命名空間Admin加入prefix
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware'=>['web','adminlogin']], function () {
    Route::get('index', 'IndexController@index');
    Route::get('logout', 'IndexController@logout');
    Route::resource('article', 'ArticleController');//資源控制器路由
});

////Named Routes(第一種用法)
//Route::get('user', ['as' => 'profile', function () {
//    echo Route('profile');//Generating URLs To Named Routes
//    return '<h1>命名</h1>';
//}]);
//
////第二種用法
//Route::get('user1', [
//    'as' => 'profile', 'uses' => 'Admin\IndexController@index'
//]);
//
////第三種用法
//Route::get('user2', 'Admin\IndexController@index')->name('profile');

//Route::get('manned', 'MannedController@test');
//
//Route::get('command', 'CommandController@test');
//
//Route::get('admin/index', 'Admin\IndexController@index');