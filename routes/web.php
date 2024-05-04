<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', [JobController::class, 'index']);


// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// Store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');        
});

// Edit job:
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// Update:
Route::patch('/jobs/{job}', function (Job $job) {
    // authorize (on hold...)


    // validation:
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect to the job page
    return redirect('/jobs/'. $job->id);
});

// Destroy or Delete:
Route::delete('/jobs/{job}', function (Job $job) {
    // authorize (on hold..)
    // Delete the job:
        //* $job = Job::findOrFail($id);
        //* $job->delete();
    $job->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});