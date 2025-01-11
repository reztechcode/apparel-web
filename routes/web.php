<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('pages.home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('movie.index');
});
