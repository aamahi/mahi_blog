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




//Route::get('admin','Admin/home@home')->name('admin.home');
Route::get('/admn',function (){
    echo "HO";
});

