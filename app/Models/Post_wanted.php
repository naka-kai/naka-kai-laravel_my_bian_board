<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_wanted extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function wanteds()
    {
        return $this->hasMany(Wanted::class);
    }
}
