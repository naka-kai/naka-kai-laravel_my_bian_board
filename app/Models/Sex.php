<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;

    public function post_sexes()
    {
        return $this->belongsTo(Post_sex::class);
    }
}
