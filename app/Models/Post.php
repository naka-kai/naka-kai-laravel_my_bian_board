<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'prefecture_id',
        'email',
        'content'
    ];

    public function getPosts()
    {
        $getPosts = Post::with([
            'age',
            'prefecture.area',
            'wanteds',
            'sexes'
        ])
        ->get();

        // dd($getPosts[0]->prefecture);

        return $getPosts;
    }

    public function age()
    {
        return $this->belongsTo(Age::class);
    }

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function wanteds()
    {
        return $this->belongsToMany(Wanted::class);
    }

    public function sexes()
    {
        return $this->belongsToMany(Sex::class);
    }
}
