<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

include __DIR__.'/web/auth.php';
include __DIR__.'/web/backend/config.php';
include __DIR__.'/web/backend/user.php';
include __DIR__.'/web/frontend/profile.php';