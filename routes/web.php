<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
Route::get ('/', 'BlogController@index')->name('blog.index');
Route::get ('post/{id}', 'BlogController@show')->name('blog.show');
Route::get('/home', 'HomeController@index');

// Admin posts routes
Route::get ('admin/posts/confirm/{id}', 'Admin\PostsController@destroyConfirm')->name('posts.confirm');
Route::resource('admin/posts', 'Admin\PostsController');
