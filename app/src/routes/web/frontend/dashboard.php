<?php

use Illuminate\Support\Facades\Route;

Route::prefix('/frontend/dashboard')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', function () {
            return view('frontend.dashboard');
        })->name('frontend.dashboard');
    });
});