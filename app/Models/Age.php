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
        $getAges = Age::all();

        return $getAges;
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
