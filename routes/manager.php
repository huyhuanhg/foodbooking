<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Admin\Auth')->group(function () {
    Route::get('/login', 'LoginController@login')->name('manager.login');
    Route::post('/login', 'LoginController@doLogin')->name('manager.dologin');
    Route::post('logout', 'LoginController@logout')->name('manager.logout');
});

Route::namespace('App\Http\Controllers\Admin')->middleware('auth:admin')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('dashboard');

//        Category
        Route::get('/categories', 'CategoryController@index')->name('categories');
        Route::post('/category/store', 'CategoryController@store')->name('category.store');
        Route::put('/category/update', 'CategoryController@update')->name('category.update');
        Route::delete('/category/delete', 'CategoryController@delete')->name('category.delete');
        Route::patch('/category/toggleActive', 'CategoryController@toggleActive')->name('category.toggleActive');

//        Store
        Route::get('/shop', 'StoreController@index')->name('stores');
        Route::post('/shop', 'StoreController@store')->name('stores.create');
        Route::put('/shop/{id}', 'StoreController@update')->name('stores.update');
        Route::delete('/shop/{id}', 'StoreController@destroy')->name('stores.destroy');

//        Customer
        Route::get('/customer', 'UserController@customer')->name('customers');
        Route::get('/customer/profile', 'UserController@show')->name('customer.profile');

//        food
        Route::get('/foods', 'FoodController@index')->name('foods');
//        user

//        order
        Route::get('/orders', 'OrderController@index')->name('orders');

//        khuyến mãi
        Route::get('/promotions', 'PromotionController@index')->name('promotions');
    });
