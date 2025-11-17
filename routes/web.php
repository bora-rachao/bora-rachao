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
            ->prefix('register')
            ->middleware('guest')
            ->group(function () {
                Route::get('/', [RegisterController::class, 'create'])->name('create');
                Route::post('/', [RegisterController::class, 'store'])->name('store');
            });
        Route::name('login.')
            ->prefix('login')
            ->middleware('guest')
            ->group(function () {
                Route::get('/', [LoginController::class, 'create'])->name('create');
                Route::post('/', [LoginController::class, 'store'])->name('store');
            });
        Route::post('/logout', [LoginController::class, 'destroy'])
            ->name('logout')
            ->middleware('auth');
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
