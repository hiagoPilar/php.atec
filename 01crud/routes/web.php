<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\BicycleController;
use App\Http\Controllers\UserController;


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
    return view('master.main');
})->name('main');

Auth::routes();


Route::prefix('countries')->group(function(){
    Route::get('/', [CountryController::class, 'index'])->name('countries.index');
    Route::get('/create', [CountryController::class, 'create'])->name('countries.create');
    Route::post('/', [CountryController::class, 'store'])->name('countries.store');
    Route::get('/{id}', [CountryController::class, 'show'])->name('countries.show');
    Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('countries.edit');
    Route::put('/{id}', [CountryController::class, 'update'])->name('countries.update');
    Route::delete('/{id}', [CountryController::class, 'destroy'])->name('countries.destroy');
});

Route::prefix('bicycles')->group(function(){
    Route::get('/', [BicycleController::class, 'index'])->name('bicycles.index');
    Route::get('create', [BicycleController::class, 'create'])->name('bicycles.create');
    Route::post('/', [BicycleController::class, 'store'])->name('bicycles.store');
    Route::get('/{id}', [BicycleController::class, 'show'])->name('bicycles.show');
    Route::get('/{id}/edit', [BicycleController::class, 'edit'])->name('bicycles.edit');
    Route::put('/{id}', [BicycleController::class, 'update'])->name('bicycles.update');
    Route::delete('/{id}', [BicycleController::class, 'destroy'])->name('bicycles.destroy');
});

Route::prefix('users')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{id}]', [UserController::class, 'show'])->name('users.show');
    Route::get('{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('{id}', [UserController::class, 'destroy'])->name('users.destroy');
});



