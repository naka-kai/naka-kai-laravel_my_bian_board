<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function age()
    {
        return $this->hasOne(Age::class);
    }

    public function prefecture()
    {
        return $this->hasOne(Prefecture::class);
    }

    public function post_wanteds()
    {
        return $this->hasMany(Wanted::class);
    }

    public function post_sexes()
    {
        return $this->hasMany(Sex::class);
    }
}
