<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

Route::middleware('auth')->group(function () {
    Route::resource('categories',CategoryController::class);
    Route::resource('events', EventController::class);
});

// Generates all the necessary authentication routes
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
