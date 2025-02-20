<?php

use Illuminate\Support\Facades\Route;
use App\Models\Vinyle;
use App\Models\Commantaire;



Route::get('/', function () {
    $vinyles = Vinyle::with('artist')->paginate(6);
    return view('accueil',["vinyles" => $vinyles]);
});

Route::get('/article/{id}', function ($id) {
    $vinyle = Vinyle::findOrFail($id);
    $commentaires = Commantaire::with('user')->where('vinyle_id', $id)->paginate(3);

    return view('article', [
        'vinyle' => $vinyle,
        'commantaires' => $commentaires
    ]);
});

