<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;

Route::apiResource('players', PlayerController::class);


Route::get('players/status/{retired}', [PlayerController::class, 'indexByStatus']);