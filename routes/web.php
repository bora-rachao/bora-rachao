<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
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

Route::prefix('events')
    ->name('events.')
    ->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/create', [EventController::class, 'store'])->name('store');
    });

Route::get('/sports', [SportController::class, 'index'])->name('sports');

Route::prefix('general')
    ->name('general.')
    ->group(function () {
        Route::get('/about', [GeneralController::class, 'about'])->name('about');
        Route::get('/contact', [GeneralController::class, 'contact'])->name('contact');
        Route::get('/privacy-policy', [GeneralController::class, 'privacyPolicy'])->name('privacy-policy');
        Route::get('/terms-of-use', [GeneralController::class, 'termsOfUse'])->name('terms-of-use');
    });
