<?php

use App\Exceptions\CustomException;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', ['name' => 'Home']);
})->name('home');

Route::get('/about', function () {
    return view('about', ['name' => 'About']);
})->name('about');
Route::get('/contact', function () {
    return view('contact', ['name' => 'Contact']);
})->name('contact');


//jobs pages
Route::get('/jobs', function () {

    $jobs = Job::with('employer')->paginate(3);
    return view('jobs/jobs', [
        'name' => 'Jobs',
        'jobs' => $jobs,
    ]);
})->name('jobs');


Route::get('jobs/{id}', function ($id) {

    return view('jobs.job-description', [
        'name' => 'Job description',
        'job' => Job::find($id),
    ]);

});