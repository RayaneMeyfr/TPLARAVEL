<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyles;


Route::get('/', function () {
    return view('accueil',["vinyles" => Vinyles::all()]);
});

Route::get('/article/{id}', function ($id) {
    $vinyle = Vinyles::find($id);
    return view('article', [ 'vinyle' => $vinyle ] );
});

