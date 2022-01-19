<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outside extends Model
{
    use HasFactory;

    public function post_outside()
    {
        return $this->belongsTo(Post::class);
    }
}
