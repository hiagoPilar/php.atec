<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

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




// Route::prefix('countries')->group(function(){
//     Route::get('/', [CountryController::class, 'index'])->name('countries.index');
//     Route::get('/create', [CountryController::class, 'create'])->name('countries.create');
//     Route::post('/', [CountryController::class, 'store'])->name('countries.store');
//     Route::get('/{id}', [CountryController::class, 'show'])->name('countries.show');
//     Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('countries.edit');
//     Route::put('/{id}', [CountryController::class, 'update'])->name('countries.update');
//     Route::delete('/{id}', [CountryController::class, 'destroy'])->name('countries.destroy');
// });

Route::prefix('countries')->group(function(){
    Route::get('/', [CountryController::class, 'index'])->name('countries.index');
    Route::get('/create', [CountryController::class, 'create'])->name('countries.create');
    Route::post('/', [CountryController::class, 'store'])->name('countries.store');
    Route::get('/{id}', [CountryController::class, 'show'])->name('countries.show');
    Route::get('/{id}/edit', [CountryController::class, 'edit'])->name('countries.edit');
    Route::put('/{id}', [CountryController::class, 'update'])->name('countries.update');
    Route::delete('/{id}', [CountryController::class, 'destroy'])->name('countries.destroy');
});
