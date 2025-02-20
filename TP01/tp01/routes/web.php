<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('accueil',['nom'=>'rayane']);
});

Route::controller(JobController::class)->group(function (){
    Route::get('/jobs', 'index');
    Route::get('/job/create', 'create');
    Route::get('/job/{job}','show');
    Route::get('/job/{job}/edit','edit');
    Route::post('/jobs', 'store');
    Route::patch('/job/{job}', 'update');
    Route::delete('/job/{job}', 'destroy');
});

Route::view('/contact', 'contact');

Route::view('/about', 'about');