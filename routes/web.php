<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/categories', 'CategoriesController@index');
Route::get('/api/categories/create', 'CategoriesController@create');
Route::get('/api/categories/{category}', 'CategoriesController@show');
Route::get('/api/categories/{category}/edit', 'CategoriesController@edit');
Route::put('/api/categories/{category}', 'CategoriesController@update');
Route::post('/api/categories', 'CategoriesController@store');
Route::delete('/api/categories/{category}', 'CategoriesController@delete');


Route::get('/api/posts', 'PostsController@index');
Route::get('/api/posts/create', 'PostsController@create');
Route::get('/api/posts/{post}', 'PostsController@show');
Route::get('/api/posts/{post}/edit', 'PostsController@edit');
Route::put('/api/posts/{post}', 'PostsController@update');
Route::post('/api/posts', 'PostsController@store');
Route::delete('/api/posts/{post}', 'PostsController@delete');

Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
