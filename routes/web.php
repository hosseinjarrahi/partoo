<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index')->name('home');

Route::get('/post/{post}','PostController@index')->name('post.show');

Route::get('/login', 'HomeController@loginForm')->name('login')->middleware('guest');
Route::post('/login', 'HomeController@login')->middleware('guest');
Route::post('/register', 'HomeController@registerPost')->name('register.post')->middleware('guest');
Route::get('/register', 'HomeController@register')->name('register')->middleware('guest');

Route::group(['middleware' => ['auth','admin'],'prefix' => 'admin'],function(){
    Route::get('/', 'HomeController@admin')->name('admin.home');
    Route::resource('/category', 'CategoryController');
    Route::resource('/room', 'RoomController');
    Route::resource('/user', 'UserController');
});
