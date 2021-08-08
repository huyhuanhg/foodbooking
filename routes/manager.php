<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Admin\Auth')->group(function () {
    Route::match(['get', 'post'], '/login', 'LoginController@login')->name('manager.login');
});

Route::namespace('App\Http\Controllers\Admin')->middleware('auth:admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('dashboard');
        Route::get('/categories', 'CategoryController@index')->name('categories');
        Route::get('/store', 'StoreController@index')->name('stores');
    });
