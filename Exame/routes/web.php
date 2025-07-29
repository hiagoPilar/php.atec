<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;

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

Route::get('main', function () {
    return view('master.main');
})->name('main');


Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');