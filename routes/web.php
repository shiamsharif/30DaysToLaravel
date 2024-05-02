<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    // Job::all();


    // dd($jobs);

    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->get();  //to solve n+1 problem.

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});