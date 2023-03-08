<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use Illuminate\Support\Facades\Route;

// Authentication...
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');

// Password Reset...
Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
