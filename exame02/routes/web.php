<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Auth::routes();

//rotas protegidas por autenticacao
Route::get('/', function () {
    return view('master.main'); // página pública opcional
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::middleware('auth')->group(function(){
    Route::resource('products', 'ProductController');
    Route::post('products/{id}/restore', 'ProductController@restore')->name('product.restore');
});


Route::middleware('auth')->group(function(){
    Route::resource('projects', 'ProjectController');
});
