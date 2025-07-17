<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GalleryController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/comuna', function(){
    return view('/master.main');
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('components.gallery.gallery');


