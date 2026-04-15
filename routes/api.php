<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;

Route::apiResource('cars', CarController::class);
Route::apiResource('categories', CategoryController::class);
Route::get('categoriasActivas', [CategoryController::class, 'categoriasActivas']);
