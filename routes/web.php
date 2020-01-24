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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/produto', 'ProdutoController@index');

Route::get('/produto/create', 'ProdutoController@create');

Route::post('/produto/', 'ProdutoController@store')->name('produto.store');

Route::get('/produto/{id}', 'ProdutoController@destroy')->name('produto.destroy');

Route::get('/produto/update/{id}', 'ProdutoController@show');

Route::put('/produto/{id}', 'ProdutoController@update')->name('produto.update');

//Route Category

Route::get('/categoria', 'CategoriaController@index');

Route::get('/categoria/create', 'CategoriaController@create');

Route::post('/categoria/', 'CategoriaController@store')->name('categoria.store');

Route::get('/categoria/{id}', 'CategoriaController@destroy')->name('categoria.destroy');

Route::get('/categoria/update/{id}', 'CategoriaController@show');

Route::put('/categoria/{id}', 'CategoriaController@update')->name('categoria.update');

