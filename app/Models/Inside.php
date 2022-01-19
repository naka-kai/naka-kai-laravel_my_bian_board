<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inside extends Model
{
    use HasFactory;

    public function post_inside()
    {
        return $this->belongsTo(Post::class);
    }
}
