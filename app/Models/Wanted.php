<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wanted extends Model
{
    use HasFactory;

    protected $fillable = [
        'wanted'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
