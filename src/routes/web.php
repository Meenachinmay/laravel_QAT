<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// @DONE ROUTES
Route::get('/upload', 'DocsController@create')->name('new_upload');
Route::post('/upload', 'DocsController@upload')->name('upload_doc');
Route::get('/show', 'DocsController@show_doc')->name('show');
Route::get('/show/{id}', 'DocsController@show_one_doc')->name('show_one');

// @PENDING ROUTES
Route::patch('/upload/{id}', 'DocsController@update_doc')->name('update_doc');

Route::get('upload_images', 'MultipleUploadController@index');
Route::post('upload_images', 'MultipleUploadController@upload')->name('upload');
