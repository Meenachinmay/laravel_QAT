<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/upload', 'DocsController@create');
Route::post('/upload', 'DocsController@upload')->name('upload_doc');
Route::get('/upload/{id}', 'DocsController@show_doc')->name('view_doc');
Route::patch('/upload/{id}', 'DocsController@update_doc')->name('update_doc');


Route::get('upload_images', 'MultipleUploadController@index');
Route::post('upload_images', 'MultipleUploadController@upload')->name('upload');
