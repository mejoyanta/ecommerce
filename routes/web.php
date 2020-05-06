<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontEndController@index')->name('index');
Route::get('/product/{product}/details', 'FrontEndController@productById')->name('product.details');
Route::get('/collections', 'FrontEndController@collections')->name('collections');
Route::get('/collections/{id}', 'FrontEndController@categoryWiseProduct')->name('collections.product');
Route::get('/shop', 'FrontEndController@shop')->name('shop');
Route::get('/brands', 'FrontEndController@brands')->name('brands');
Route::get('/brands/{id}', 'FrontEndController@brandWiseProduct')->name('brands.product');
Route::get('/search', 'FrontEndController@search')->name('search');

//Cart actions
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart/{product}/add', 'CartController@store')->name('cart.add');
Route::put('/cart/{id}/update', 'CartController@update')->name('cart.update');
Route::get('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
//End cart actions
//Checkout actions
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
Route::post('/checkout/store', 'CheckoutController@store')->name('checkout.store');
//End Checkout actions


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::group(['prefix' => 'admin','namespace' => 'Admins'], function() {
    Route::group(['namespace' => 'Auth'], function() {
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
	    Route::post('/login', 'LoginController@login');
	    Route::post('/logout', 'LoginController@logout')->name('admin.logout');
    });
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('/brands', 'BrandController')->except('show');
    Route::resource('/categories', 'CategoryController')->except('show');
    Route::resource('/tags', 'TagController')->except('show');
    Route::resource('/products', 'ProductController')->except('show');
});