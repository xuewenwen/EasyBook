<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/', function () {
    $name=DB::connection()->getDatabaseName();
    echo $name;
});*/
//用户模块
//注册页面
Route::get('/register','\App\Http\Controllers\RegisterController@index');
//注册行为
Route::post('/register','\App\Http\Controllers\RegisterController@register');
//登陆页面
Route::get('/login','LoginController@index');
//登陆行为
Route::post('/login','LoginController@login');
//登出行为
Route::get('/logout','\App\Http\Controllers\LoginController@logout');
//个人页面设置
Route::get('/user/me/setting','\App\Http\Controllers\UserController@setting');
//个人设置操作
Route::post('/user/me/setting','\App\Http\Controllers\UserController@settingStore');






//文章列表页
Route::get('/posts','\App\Http\Controllers\PostController@index');

//创建文章
Route::get('/posts/create','PostController@create');
Route::post('/posts','\App\Http\Controllers\PostController@store');

//文章详情页
Route::get('/posts/{post}','\App\Http\Controllers\PostController@show');



//编辑文章
Route::get('/posts/{post}/edit','\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}','\App\Http\Controllers\PostController@update');

//删除文章
Route::get('/posts/{post}/delete','\App\Http\Controllers\PostController@delete');