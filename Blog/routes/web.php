<?php

use Illuminate\Support\Facades\Route;

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


Route::resource('autors', 'AutorController@index');

Route::prefix('categorias')->group(function(){
    Route::get('', 'CategoriaController@index');
});

Route::prefix('posts')->group(function(){
    Route::get('', 'PostController@index');
});

Route::prefix('comentarios')->group(function(){
    Route::get('', 'ComentarioController@index');
});


