<?php

use Illuminate\Support\Facades\Route;
Route::resource('admin/products','Admin\ProductController');
Route::get('admin', function(){

})->name('admin');
Route::any('admin/categories/search', 'Admin\CategoryController@search')->name('categories.search');
Route::resource('admin/categories', 'Admin\CategoryController');
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

