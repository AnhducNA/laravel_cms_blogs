<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create']);
});
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        dd(123);
    })->name('dashboard');
});
