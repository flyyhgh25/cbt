<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'registerPage'])->name('register');
    Route::post('/register', [UserController::class, 'handleRegister']);
    Route::get('/login', [UserController::class, 'loginPage'])->name('login');
    Route::post('/login', [UserController::class, 'handleLogin']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


