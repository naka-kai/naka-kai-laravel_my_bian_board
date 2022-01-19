<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_inside extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function insides()
    {
        return $this->hasMany(Inside::class);
    }
}
