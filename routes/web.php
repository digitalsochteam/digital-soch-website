<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashBoardController;

Route::get('/', [DashBoardController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
