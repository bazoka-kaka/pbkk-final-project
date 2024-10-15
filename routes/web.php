<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// All Jobs
Route::get('/', [JobController::class, 'index']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Store Job Data
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// Show Create Form
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Single Job
Route::get('/jobs/{job}', [JobController::class, 'show']);

