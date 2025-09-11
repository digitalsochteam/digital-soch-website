<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('frontend.dashboard.index');
});

Route::get('/about', function () {
    return view('frontend.dashboard.about');
})->name('about');

Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

// Backend Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::prefix('backend')->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('backend.dashboard');
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard.index');

        Route::prefix('productdetails')->name('product-details.')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/', [ProductController::class, 'store'])->name('store');
            Route::get('/{detail}/edit', [ProductController::class, 'edit'])->name('edit');
            Route::put('/{detail}', [ProductController::class, 'update'])->name('update');
            Route::delete('/{detail}', [ProductController::class, 'destroy'])->name('destroy');
        });
    });
});