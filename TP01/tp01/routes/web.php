<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil',['nom'=>'rayane']);
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/jobs', function () {
    // $job = Job::with('employer')->get();
    $job = Job::with('employer')->paginate(2);

    return view('jobs', [ 'jobs' => $job]);
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', [ 'job' => $job ] );
});
