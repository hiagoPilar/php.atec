<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('persons')->group(function() {
    Route::get('/', 'PersonController@index')->name('persons.index');
    Route::get('/create', 'PersonController@create')->name('persons.create');
    Route::post('/', 'PersonController@store')->name('persons.store');
    Route::get('/{id}', 'PersonController@show')->name('persons.show');
    Route::get('/{id}/edit', 'PersonController@edit')->name('persons.edit');
    Route::put('/{id}', 'PersonController@update')->name('persons.update');
    Route::delete('/{id}', 'PersonController@destroy')->name('persons.destroy');
}); 

Route::prefix('pets')->group(function() {
    Route::get('/', 'PetController@index')->name('pets.index');
    Route::get('/create', 'PetController@create')->name('pets.create');
    Route::post('/', 'PetController@store')->name('pets.store');
    Route::get('/{id}', 'PetController@show')->name('pets.show');
    Route::get('/{id}/edit', 'PetController@edit')->name('pets.edit');
    Route::put('/{id}', 'PetController@update')->name('pets.update');
    Route::delete('/{id}', 'PetController@destroy')->name('pets.destroy');
});