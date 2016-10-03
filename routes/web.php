<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/store', 'StoreController@index');
Route::get('/store/home-v2', 'StoreController@home_v2');
Route::get('/store/home-v3', 'StoreController@home_v3');

Auth::routes();

Route::get('/index', 'HomeController@index');
Route::get('/home', 'HomeController@dashboard');
