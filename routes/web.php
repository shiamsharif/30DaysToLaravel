<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

// Index:
Route::get('/jobs', [JobController::class, 'index']);


// Create:
Route::get('/jobs/create', [JobController::class, 'create']);

// Show:
Route::get('/jobs/{job}', [JobController::class, 'show']);


// Store:
Route::post('/jobs', [JobController::class, 'store']);


// Edit job:
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);


// Update:
Route::patch('/jobs/{job}', [JobController::class, 'update']);


// Destroy or Delete:
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


Route::get('/contact', function () {
    return view('contact');
});