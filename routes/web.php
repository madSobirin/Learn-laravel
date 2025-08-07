<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardPostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);

//Logout
Route::post('/logout', [AuthController::class, 'logout']);

// register
Route::get('/register', [AuthController::class, 'showRegisterForm']);
Route::post('/register', [AuthController::class, 'store']);
// Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/dashboard', [
    function () {
        return view('dashboard.index');
    }
])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

