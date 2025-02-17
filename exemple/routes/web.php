<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bonjour', function () {
    return view("bonjour",['nom'=>'Rayane']);
});

Route::get('/bonjour2', function () {
    return view("bonjour2",['nom'=>'Erwan']);
});

Route::get('/user/{id}',function($id){
    return "Utilisateur: ". $id;
});