<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commantaire extends Model
{
    /** @use HasFactory<\Database\Factories\CommantaireFactory> */
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function vinyle(){
        return $this->belongsTo(Vinyle::class);
    }
}
