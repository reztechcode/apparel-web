<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('movie.index');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/auth/login', 'showLoginForm')->name('login')->middleware('guest');
    Route::post('/auth/login', 'login');
    Route::get('/auth/logout', 'logout');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('products', ProductController::class);
});

