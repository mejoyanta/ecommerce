<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
})->name('index');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');


Route::group(['prefix' => 'admin','namespace' => 'Admins'], function() {
    Route::group(['namespace' => 'Auth'], function() {
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
	    Route::post('/login', 'LoginController@login');
	    Route::post('/logout', 'LoginController@logout')->name('admin.logout');
    });
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
});