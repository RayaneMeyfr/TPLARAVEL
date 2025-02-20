<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyle;


Route::get('/', function () {
    $vinyles = Vinyle::with('artist')->paginate(6);
    return view('accueil',["vinyles" => $vinyles]);
});

Route::get('/article/{id}', function ($id) {
    $vinyle = Vinyle::find($id);
    return view('article', [ 'vinyle' => $vinyle ] );
});

