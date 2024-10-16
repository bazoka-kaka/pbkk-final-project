<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// All Jobs
Route::get('/', [JobController::class, 'index']);

// About Jobs
Route::get('/about', [JobController::class, 'about']);

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

// Manage Jobs
Route::get('/jobs/manage', [JobController::class, 'manage'])->middleware('auth');

// Single Job
Route::get('/jobs/{job}', [JobController::class, 'show']);

// // Show Edit Form
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth');

// // Update Job
// Route::put('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');

// // Delete Job
// Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');
