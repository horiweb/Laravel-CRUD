<?php

Route::get('/','FrontendController@index');
Route::get('contact','FrontendController@contact');
Route::get('about','FrontendController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/product/view', 'ProductController@addproductview');
Route::post('add/product/insert', 'ProductController@addproductinsert');
Route::get('delete/product/{product_id}', 'ProductController@deleteproduct');
Route::get('edit/product/{product_id}', 'ProductController@editproduct');
Route::post('edit/product/insert', 'ProductController@editproductinsert');
