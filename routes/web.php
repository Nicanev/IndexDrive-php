<?php


use App\Http\Controllers\RegisterContoller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/branches', function () {
    return view('branches');
})->name('branches');

Route::post('/register/submit', [RegisterContoller::class, 'submit'])->name('register-form');
Route::get('/register/all', [RegisterContoller::class, 'allUsers']);


