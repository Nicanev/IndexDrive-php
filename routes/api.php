<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [RegisterContoller::class, 'store']);
Route::post('/login', [LoginController::class, 'apiLogin']);
Route::post('/booking', [BookingController::class, 'booking']);
Route::get('/profile/{booking}', [BookingController::class, 'show']);
