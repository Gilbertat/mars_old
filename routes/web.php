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

/*静态页面*/
Route::get('/', 'StaticPagesController@home')->name('home');

/*用户相关操作 包括 注册，修改信息，找回密码等*/
Route::get('signup', 'UsersController@create')->name('signUp');


/*用户状态 登录 退出登录*/
Route::get('login', 'SessionsController@create')->name('login');