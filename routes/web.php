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

// Index Pages
Route::get('/', 'PublicController@index');
Route::get('/index', 'PublicController@index');

// Public Routes
Route::get('/blog', 'PublicController@blog');
Route::post('store/subscribe', 'PublicController@subscribe');

// Dev Route
Route::get('/dev/info', function () {
    if(!config('app.debug')) {
        abort(403, 'Access denied');
    }
    dump(config('session.driver'));
    dump(config('database'));
    phpinfo();
});

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm');
$this->get('register/referral/{code}', 'Auth\RegisterController@showRegistrationFormWithReferralCode');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');

// Back-end
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@home');
    Route::get('/admin', 'HomeController@admin');
    Route::get('/dashboard', 'HomeController@dashboard');

    // User Management
    Route::get('users/search', 'UserManagementController@index');
    Route::post('users/search', 'UserManagementController@search');
    Route::resource('users', 'UserManagementController');

    // User Profile and Settings
    Route::get('user/profile', 'UserController@profile');
    Route::post('user/profile', 'UserController@updateProfile');
    Route::get('user/settings', 'UserController@settings');
    Route::post('user/settings', 'UserController@updateSettings');

    // User Referral Code
    Route::get('user/referral', 'UserController@getReferralCode');

    // Subscriptions
    Route::get('subscriptions', 'SubscriptionController@index');

    // Product Management

    // Product Types
    Route::resource('product-types', 'ProductTypeController');
    // Product Vendors
    Route::resource('vendors', 'VendorController');
    // Product
    Route::get('products/inventory', 'ProductController@showInventory');
    Route::post('products/update-quantity', 'ProductController@updateQuantity');
    Route::resource('products', 'ProductController');

    // Store
    Route::get('/store', 'StoreController@index');
    Route::get('store/cart/add/{productId}/{quantity}', 'StoreController@addToCart');
    Route::post('store/cart/update/{productId}/{quantity}', 'StoreController@updateQuantity');
    Route::post('store/cart/remove/{productId}', 'StoreController@removeFromCart');
    Route::get('store/cart/review', 'StoreController@showReviewOrder');

    // Order Management
    Route::get('orders', 'OrderController@index');
    Route::get('orders/{orderId}', 'OrderController@show');
    Route::post('orders/{orderId}/new', 'StoreController@submitOrder');
    Route::post('orders/{orderId}/paid', 'OrderController@changeOrderStatusToPaid');
    Route::post('orders/{orderId}/complete', 'OrderController@changeOrderStatusToComplete');

    Route::get('orders-new', 'OrderController@showNewOrders');
    Route::get('orders-paid', 'OrderController@showPaidOrders');
    Route::get('orders-complete', 'OrderController@showCompletedOrders');
});
