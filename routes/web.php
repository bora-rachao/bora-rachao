<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('auth')
    ->group(function () {
        Route::name('register')
            ->prefix('register')
            ->middleware('guest')
            ->controller(RegisterController::class)
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');
            });
        Route::name('login')
            ->prefix('login')
            ->middleware('guest')
            ->controller(LoginController::class)
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');
            });
        Route::name('logout')
            ->middleware('auth')
            ->post('/logout', [LoginController::class, 'destroy']);
    });

Route::prefix('events')
    ->name('events.')
    ->controller(EventController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/create', 'store')->name('store');
        Route::get('/{event}', 'view')->name('view');
    });

Route::get('/sports', [SportController::class, 'index'])->name('sports');

Route::prefix('general')
    ->name('general.')
    ->controller(GeneralController::class)
    ->group(function () {
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
        Route::get('/terms-of-use', 'termsOfUse')->name('terms-of-use');
    });

Route::prefix('profiles')
    ->name('profiles.')
    ->controller(ProfileController::class)
    ->group(function () {
        Route::get('/{user:username}', 'view')->name('view');
    });

Route::prefix('users')
    ->name('users.')
    ->middleware('auth')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::put('/profile', 'profileUpdate')->name('profile.update');
        Route::get('/avatar', 'avatar')->name('avatar');
        Route::put('/avatar', 'avatarUpdate')->name('avatar.update');
        Route::get('/personal', 'personal')->name('personal');
        Route::put('/personal', 'personalUpdate')->name('personal.update');
        Route::get('/password', 'password')->name('password');
        Route::put('/password', 'passwordUpdate')->name('password.update');
    });

Route::prefix('friends')
    ->name('friends.')
    ->middleware('auth')
    ->controller(FriendController::class)
    ->group(function () {

        Route::get('/receiveds', 'receiveds')->name('receiveds');
        Route::post('/request/{user:username}', 'request')->name('request');
        Route::delete('/destroy/{user:username}', 'destroy')->name('destroy');
        Route::post('/accept/{friend}', 'accept')->name('accept');
        Route::post('/reject/{friend}', 'reject')->name('reject');
    });

Route::prefix('notifications')
    ->name('notifications.')
    ->controller(NotificationController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });
