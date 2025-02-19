<?php


namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{
    protected $table = 'jobs_listtemp';
    use HasFactory;

    protected $fillable = [
        "title",
        "salary"
    ];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }
    
}
