<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuadraticController;
use App\Http\Controllers\ProductController;

Route::get('/quadratic', [QuadraticController::class, 'index']);
Route::post('/quadratic', [QuadraticController::class, 'solve']);

Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create',[ProductController::class,'create']);
Route::post('/product/store',[ProductController::class,'store'])->name('product.store');
Route::get('product/{id}',[ProductController::class,'show'])->name('product.show');
Route::put('product/{id}',[ProductController::class,'update'])->name('product.update');
Route::delete('product/{id}',[ProductController::class,'destroy'])->name('product.destroy');//estaaaaaa
Route::get('product/{id}/editar',[ProductController::class,'edit'])->name('product.edit');









