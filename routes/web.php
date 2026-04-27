<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
});

Route::middleware('auth')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('pages.index');
    Route::get('/charts', [PageController::class, 'charts'])->name('pages.charts');
    Route::get('/components', [PageController::class, 'components'])->name('pages.components');
    Route::get('/datatables', [PageController::class, 'datatables'])->name('pages.datatables');
    Route::get('/settings', [PageController::class, 'settings'])->name('pages.settings');

    Route::resource('products', ProductController::class)->except(['show']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
