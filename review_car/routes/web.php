<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

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

Route::get('/brands', [BrandController::class, 'index'])->name('brands');

Route::get('/cars', [CarController::class, 'index'])->name('cars');

