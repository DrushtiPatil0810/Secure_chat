<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::get('/verification', function () {
    return view('verification');
})->name('verification');


Route::get('/signin', [AuthController::class, 'showLoginForm'])->name('signin');

Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
