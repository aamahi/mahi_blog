<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Frontend\Home@home')->name('frontend.home');

Route::get('/dashboard','Admin\home@home')->name('admin.home');
Route::get('/dashboard/category_add','Admin\Category@category_add')->name('admin.category_add');
Route::post('/dashboard/category_add','Admin\Category@add_category');

Route::get('/dashboard/category_add','Admin\Category@all_category')->name('admin.all_category');

Route::get('dashboard/active_category/{id}','Admin\Category@active_category')->name('active_category');
Route::get('dashboard/deactive_category/{id}','Admin\Category@deactive_category')->name('deactive_category');

Route::get('dashboard/delete_category/{id}','Admin\Category@delete_category')->name('delete_category');

Route::get('dashboard/update_category/{id}','Admin\Category@update_category')->name('update_category');
Route::post('dashboard/update_category/{id}','Admin\Category@edit_category');
