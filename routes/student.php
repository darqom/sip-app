<?php

use App\Http\Controllers\Auth\Student\AuthController;
use App\Http\Controllers\Auth\Student\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'create'])->name('login.student');
Route::post('/login', [AuthController::class, 'store']);
Route::get('/register', [RegisterController::class, 'create'])->name('register.student');
Route::post('/register', [RegisterController::class, 'store']);
