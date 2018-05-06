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

Route::get('/', 'PostController@index')->name('post.index');
Route::get('/post/{post}', 'PostController@show')->name('post.show');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@mailToAdmin');

Route::get('/category/{category}', 'CategoryController@show')->name('category.show');