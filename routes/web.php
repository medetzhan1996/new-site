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

Route::get('/{category_id?}', 'MainController@index')->name('main_index');
Route::get('/product/{id}', 'MainController@product_detail')->name('main_product_detail');
