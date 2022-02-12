<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    use HasFactory;

    protected $fillable = [
        'age'
    ];

    public function getAges()
    {
        $get_ages = Age::all();

        return $get_ages;
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
