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
    return view('auth.login');
});

Route::get('/store', 'StoreController@index');
Route::get('/store/home-v2', 'StoreController@home_v2');
Route::get('/store/home-v3', 'StoreController@home_v3');

Route::get('/dev/info', function () {
    if(!config('app.debug')) {
        abort(403, 'Access denied');
    }
    dump(config('database'));
    phpinfo();
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/index', 'HomeController@index');
    Route::get('/home', 'HomeController@dashboard');
    Route::get('/dashboard', 'HomeController@dashboard');

    // User Management
    Route::get('users/search', 'UserManagementController@index');
    Route::post('users/search', 'UserManagementController@search');
    Route::resource('users', 'UserManagementController');

    // Product Management

    // Product Types
    Route::resource('product-types', 'ProductTypeController');
    // Product Vendors
    Route::resource('vendors', 'VendorController');
    // Product
    Route::get('products/inventory', 'ProductController@showInventory');
    Route::post('products/update-quantity', 'ProductController@updateQuantity');
    Route::resource('products', 'ProductController');
});
