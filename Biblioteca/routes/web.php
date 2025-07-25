<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;

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

Route::get('/main', function(){
    return view ('master.main');
})->name('main');

Route::prefix('livros')->group(function(){
    Route::get('', 'LivroController@index');
    Route::get('', [LivroController::class, 'index'])->name('livros.index');
});

Route::prefix('usuarios')->group(function(){
    Route::get('', 'UsuarioController@index');
    Route::get('', [UsuarioController::class, 'index'])->name('usuarios.index');
});

Route::prefix('perfils')->group(function(){
    Route::get('', 'PerfilController@index');
    Route::get('', [PerfilController::class, 'index'])->name('perfils.index');
});
