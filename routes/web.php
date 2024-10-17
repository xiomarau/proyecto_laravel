<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuadraticController;

Route::get('/quadratic', [QuadraticController::class, 'index']);
Route::post('/quadratic', [QuadraticController::class, 'solve']);

