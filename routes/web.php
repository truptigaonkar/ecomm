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

Route::get('/', array('uses'=>'StoreController@index'));

Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/products', 'ProductsController');
Route::resource('store', 'StoreController');
Route::get('/store/category/{id}', 'StoreController@category');
Route::post('/search', 'StoreController@search');
Route::get('/cart', 'CartController@index');
Route::get('/cart/addItem/{id}', 'CartController@addItem');
Route::get('/cart/remove/{id}', 'CartController@destroy');
Route::put('/cart/update/{id}', 'CartController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




