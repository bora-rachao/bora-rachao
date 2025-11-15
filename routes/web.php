<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('auth')
    ->name('auth.')
    ->middleware('guest')
    ->group(function () {
        Route::get('/register', [RegisterController::class, 'create'])->name('register');
        Route::post('/register', [RegisterController::class, 'store'])->name('store');
        Route::
            name('login.')
            ->group(function () {
            Route::get('/login', [LoginController::class, 'create'])->name('create');
            Route::post('/login', [LoginController::class, 'store'])->name('store');
        });
    });

Route::get('/sports', [SportController::class, 'index'])->name('sports');
