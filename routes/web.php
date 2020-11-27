<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'PostController@index');
Route::post('/like', 'PostController@like')->name('posts.like');
Auth::routes();

