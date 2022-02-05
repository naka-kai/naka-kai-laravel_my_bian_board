<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;

    protected $fillable = [
        'sex',
        'inputName'
    ];

    public function getSexes()
    {
        $get_sexes = Sex::all();

        // dd($getSexes);

        return $get_sexes;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
