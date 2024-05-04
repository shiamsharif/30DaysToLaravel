<?php


use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);  //to solve n+1 problem.

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});


// Create
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

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
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

// Update:
Route::patch('/jobs/{id}', function ($id) {
    // validation:
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize (on hold...)

    // update the job
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    // redirect to the job page
    return redirect('/jobs/'. $job->id);
});

// Destroy or Delete:
Route::delete('/jobs/{id}', function ($id) {
    // authorize (on hold..)
    // Delete the job:
        //* $job = Job::findOrFail($id);
        //* $job->delete();
    Job::findOrFail($id)->delete();

    // redirect
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});