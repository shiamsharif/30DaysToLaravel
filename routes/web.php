<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionControler;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

// Auth:
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionControler::class, 'create']);
Route::post('/login', [SessionControler::class, 'store']);