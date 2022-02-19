<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'title',
        'name',
        'age_id',
        'prefecture_id',
        'email',
        'content',
        'password'
    ];

    public function getPosts()
    {
        $get_posts = Post::with([
            'age',
            'prefecture.area',
            'wanteds',
            'sexes'
        ])
        ->orderBy('posts.id', 'desc')
        ->get();

        // dd($get_posts);

        return $get_posts;
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
