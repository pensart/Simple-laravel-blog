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

// Routes available for guests
Route::get ('/', 'BlogController@index')->name('blog.index');
Route::get ('post/{id}', 'BlogController@show')->name('blog.show');
Route::get('/home', 'HomeController@index');

// Only routes for authorised members
Route::group(['middleware'=>'auth'], function() {

    Route::get ('/posts/confirm/{id}', 'PostsController@destroyConfirm')->name('posts.confirm');
    Route::resource('/posts', 'PostsController');

});

// Only super users routes
Route::group(['middleware'=>['auth','auth.super']], function() {

    Route::get ('/superPosts/confirm/{id}', 'SuperPostsController@destroyConfirm')->name('superPosts.confirm');
    Route::resource('/superPosts', 'SuperPostsController');

});