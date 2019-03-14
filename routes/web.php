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




Route::get('/', function () {
    return "Halaman Kategori";
});

Route::get('/viewkategori', 'CategoryController@index')->name('viewkategori');

Route::resource('kategori2', 'CategoryController')->except(['destroy']);

Route::post('inputdata/store','CategoryController@store');

Route::get('/hapus/destroy/{category_id}','CategoryController@destroy');
Route::post('/datakategori/update','CategoryController@update');

Route::get('/edit/edit/{category_id}','CategoryController@edit');

Route::get('query', 'CategoryController@search');





