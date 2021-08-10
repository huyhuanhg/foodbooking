<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Admin\Auth')->group(function () {
    Route::get( '/login', 'LoginController@login')->name('manager.login');
    Route::post( '/login', 'LoginController@doLogin')->name('manager.dologin');
    Route::post('logout', 'LoginController@logout')->name('manager.logout');
});

Route::namespace('App\Http\Controllers\Admin')->middleware('auth:admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('dashboard');

//        Category
        Route::get('/categories', 'CategoryController@index')->name('categories');
        Route::post('/category/store', 'CategoryController@store')->name('category.store');
        Route::put('/category/update','CategoryController@update')->name('category.update');
        Route::delete('/category/delete','CategoryController@delete')->name('category.delete');

//        Store
        Route::get('/store', 'StoreController@index')->name('stores');

//        Customer
        Route::get('/customer', 'UserController@customer')->name('customers');
        Route::get('/customer/profile', 'UserController@show')->name('customer.profile');
    });
