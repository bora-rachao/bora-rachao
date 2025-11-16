<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('auth')
    ->name('auth.')
    ->group(function () {
        Route::name('register.')
            ->group(function () {
            Route::get('/register', [RegisterController::class, 'create'])->name('create')->middleware('guest');
            Route::post('/register', [RegisterController::class, 'store'])->name('store')->middleware('guest');
        });
        Route::name('login.')
            ->group(function () {
            Route::get('/login', [LoginController::class, 'create'])->name('create')->middleware('guest');
            Route::post('/login', [LoginController::class, 'store'])->name('store')->middleware('guest');
        });
        Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');
    });

Route::get('/sports', [SportController::class, 'index'])->name('sports');

Route::prefix('general')
    ->name('general.')
    ->group(function () {
        // Coloquem aqui as rotas, somente a get
        // About
        // terms
        // policy
    });