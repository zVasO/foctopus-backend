<?php

use App\Http\Controllers\API\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', LoginController::class . '@login');

Route::get('/user', static function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
