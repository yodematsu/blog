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

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
});

Route::namespace('User')->prefix('user')->group(function(){
    // Route::
});