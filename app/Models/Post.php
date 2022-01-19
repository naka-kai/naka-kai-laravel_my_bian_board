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

    public function post_outsides()
    {
        return $this->hasMany(Outside::class);
    }

    public function post_insides()
    {
        return $this->hasMany(Inside::class);
    }
}
