<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [JobController::class, 'index']);

// Single Listing
Route::get('/jobs/{job}', [JobController::class, 'show']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);