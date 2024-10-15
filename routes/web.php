<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// All Listings
Route::get('/', [JobController::class, 'index']);

// Single Listing
Route::get('/jobs/{job}', [JobController::class, 'show']);