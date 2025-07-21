<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customauthcontroller;



Route::get('/', [CustomAuthController::class, 'login'])->name('login');
Route::post('/login', [CustomAuthController::class, 'loginUser'])->name('login-user');

Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
Route::post('/register', [CustomAuthController::class, 'registerUser'])->name('register-user');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');





