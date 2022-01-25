<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_sex extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'sex_id'
    ];



    public function post()
    {
        return $this->hasMany(Post::class);
    }

    public function sexes()
    {
        return $this->hasMany(Sex::class);
    }
}
