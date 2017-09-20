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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('',['as'=>'home','uses'=>'Admin\DashboardController@index']);
    // Route::get('/produto/view/{id}',['as'=>'product-view','uses'=>'Admin\ProductController@show']);
});
