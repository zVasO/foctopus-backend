<?php

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\LogoutController;
use App\Http\Controllers\API\NoiseController;
use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users', [UserController::class, 'getAll'])->name('getAllUsers');
    Route::get('/noises', [NoiseController::class, 'getAll'])->name('getAllNoises');
});
