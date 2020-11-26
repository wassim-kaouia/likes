<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PostController@index');
Route::get('/like', 'PostController@like')->name('post.likes');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
