<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vinyle extends Model
{
    /** @use HasFactory<\Database\Factories\VinyleFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'release_year',
        'label',
        'description',
        'preview',
        'date_add',
    ];

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function commantaires(){
        return $this->hasMany(Commantaire::class);
    }
}
