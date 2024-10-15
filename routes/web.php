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

// Show Create Form
// Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

// // Store Listing Data
// Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');

// // Show Edit Form
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth');

// // Update Listing
// Route::put('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');

// // Delete Listing
// Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');

// // Manage Listings
// Route::get('/jobs/manage', [JobController::class, 'manage'])->middleware('auth');

// // Log User Out
// Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// // Show Login Form
// Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// // Log In User
// Route::post('/users/authenticate', [UserController::class, 'authenticate']);
