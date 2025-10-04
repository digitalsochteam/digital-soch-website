<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\DashboardController as BackendDashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductPackageController;
use App\Http\Controllers\ProductPackageSubscriptionController;
use App\Http\Controllers\RouteController;


Route::get('/', [DashboardController::class, 'index'])->name('frontend.dashboard.index');

Route::get('/about-our-agency', function () {
    return view('frontend.dashboard.about');
})->name('about');

Route::get('/contact-information', function () {
    return view('frontend.dashboard.contact');
})->name('contact');

Route::get('/cancellation-refund-policy', function () {
    return view('frontend.dashboard.cancellation_refund_policy');
})->name('cancellationrefundpolicy');

Route::get('/terms-and-conditions', function () {
    return view('frontend.dashboard.termsandcondition');
})->name('termsandcondition');

Route::get('/privacy-policy', function () {
    return view('frontend.dashboard.privacypolicy');
})->name('privacypolicy');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/package/{id}', [ProductPackageSubscriptionController::class, 'show'])->name('package.show');

// Route::get('/{id}', [RouteController::class, 'findByRoute'])->name('find.route');


Route::get('/blogs', [BlogController::class, 'getallblogs'])->name('blog.seeallblogs');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Backend Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postlogin'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::prefix('backend')->group(function () {
        Route::get('/', action: [BackendDashboardController::class, 'dashboard'])->name('backend.dashboard');
        Route::get('/dashboard', [BackendDashboardController::class, 'dashboard'])->name('dashboard.index');

        Route::prefix('productdetails')->name('product-details.')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('index');
            Route::get('/create', [ProductController::class, 'create'])->name('create');
            Route::post('/', [ProductController::class, 'store'])->name('store');
            Route::get('/{detail}/edit', [ProductController::class, 'edit'])->name('edit');
            Route::put('/{detail}', [ProductController::class, 'update'])->name('update');
            Route::delete('/{detail}', [ProductController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('testimonialdetails')->name('testimonial-details.')->group(function () {
            Route::get('/', [TestimonialController::class, 'index'])->name('index');
            Route::get('/create', [TestimonialController::class, 'create'])->name('create');
            Route::post('/', [TestimonialController::class, 'store'])->name('store');
            Route::get('/{detail}/edit', [TestimonialController::class, 'edit'])->name('edit');
            Route::put('/{detail}', [TestimonialController::class, 'update'])->name('update');
            Route::delete('/{detail}', [TestimonialController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('blogdetails')->name('blog-details.')->group(function () {
            Route::get('/', [BlogController::class, 'index'])->name('index');
            Route::get('/create', [BlogController::class, 'create'])->name('create');
            Route::post('/', [BlogController::class, 'store'])->name('store');
            Route::get('/{detail}/edit', [BlogController::class, 'edit'])->name('edit');
            Route::put('/{detail}', [BlogController::class, 'update'])->name('update');
            Route::delete('/{detail}', [BlogController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('packagedetails')->name('package-details.')->group(function () {
            Route::get('/', [ProductPackageController::class, 'index'])->name('index');
            Route::get('/create', [ProductPackageController::class, 'create'])->name('create');
            Route::post('/', [ProductPackageController::class, 'store'])->name('store');
            Route::get('/{detail}/edit', [ProductPackageController::class, 'edit'])->name('edit');
            Route::put('/{detail}', [ProductPackageController::class, 'update'])->name('update');
            Route::delete('/{detail}', [ProductPackageController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('packagesubscriptiondetails')->name('package-subscription-details.')->group(function () {
            Route::get('/', [ProductPackageSubscriptionController::class, 'index'])->name('index');
            Route::get('/create', [ProductPackageSubscriptionController::class, 'create'])->name('create');
            Route::post('/', [ProductPackageSubscriptionController::class, 'store'])->name('store');
            Route::get('/{detail}/edit', [ProductPackageSubscriptionController::class, 'edit'])->name('edit');
            Route::put('/{detail}', [ProductPackageSubscriptionController::class, 'update'])->name('update');
            Route::delete('/{detail}', [ProductPackageSubscriptionController::class, 'destroy'])->name('destroy');
        });
    });
});