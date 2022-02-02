<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_wanted extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'wanted_id'
    ];

    // public function posts()
    // {
    //     return $this->hasMany(Post::class);
    // }

    // public function wanteds()
    // {
    //     return $this->hasMany(Wanted::class);
    // }
}
