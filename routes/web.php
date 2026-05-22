<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Client Frontend Landing Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Authentication Routes
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Protected Admin Dashboard Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::post('/settings/update', [AdminDashboardController::class, 'updateSettings'])->name('settings.update');

    // Services CRUD
    Route::post('/services', [AdminDashboardController::class, 'storeService'])->name('services.store');
    Route::post('/services/{id}/update', [AdminDashboardController::class, 'updateService'])->name('services.update');
    Route::post('/services/{id}/delete', [AdminDashboardController::class, 'destroyService'])->name('services.destroy');

    // Benefits CRUD
    Route::post('/benefits', [AdminDashboardController::class, 'storeBenefit'])->name('benefits.store');
    Route::post('/benefits/{id}/update', [AdminDashboardController::class, 'updateBenefit'])->name('benefits.update');
    Route::post('/benefits/{id}/delete', [AdminDashboardController::class, 'destroyBenefit'])->name('benefits.destroy');

    // Testimonials CRUD
    Route::post('/testimonials', [AdminDashboardController::class, 'storeTestimonial'])->name('testimonials.store');
    Route::post('/testimonials/{id}/update', [AdminDashboardController::class, 'updateTestimonial'])->name('testimonials.update');
    Route::post('/testimonials/{id}/delete', [AdminDashboardController::class, 'destroyTestimonial'])->name('testimonials.destroy');

    // Steps CRUD
    Route::post('/steps', [AdminDashboardController::class, 'storeStep'])->name('steps.store');
    Route::post('/steps/{id}/update', [AdminDashboardController::class, 'updateStep'])->name('steps.update');
    Route::post('/steps/{id}/delete', [AdminDashboardController::class, 'destroyStep'])->name('steps.destroy');

    // Stats CRUD
    Route::post('/stats', [AdminDashboardController::class, 'storeStat'])->name('stats.store');
    Route::post('/stats/{id}/update', [AdminDashboardController::class, 'updateStat'])->name('stats.update');
    Route::post('/stats/{id}/delete', [AdminDashboardController::class, 'destroyStat'])->name('stats.destroy');
});
