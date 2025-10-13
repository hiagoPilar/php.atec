<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//rotas protegidas por autenticacao
Route::get('/', function () {
    return view('master.main'); // página pública opcional
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
