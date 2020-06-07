<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/categories', 'CategoriesController@index');
Route::get('/api/categories/create', 'CategoriesController@create')->middleware('auth');
Route::get('/api/categories/{category}', 'CategoriesController@show');
Route::get('/api/categories/{category}/edit', 'CategoriesController@edit')->middleware('auth');
Route::put('/api/categories/{category}', 'CategoriesController@update')->middleware('auth');
Route::post('/api/categories', 'CategoriesController@store')->middleware('auth');
Route::delete('/api/categories/{category}', 'CategoriesController@delete')->middleware('auth');

Route::get('/api/posts', 'PostsController@index');
Route::get('/api/posts/create', 'PostsController@create')->middleware('auth');
Route::get('/api/posts/{post}', 'PostsController@show');
Route::get('/api/posts/{post}/edit', 'PostsController@edit')->middleware('auth');
Route::put('/api/posts/{post}', 'PostsController@update')->middleware('auth');
Route::post('/api/posts', 'PostsController@store')->middleware('auth');
Route::delete('/api/posts/{post}', 'PostsController@delete')->middleware('auth');

Auth::routes();

Route::get('/{any?}', function () {
    return view('welcome');
});

/*Route::get('/home', 'HomeController@index')->name('home');*/
