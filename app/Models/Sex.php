<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    use HasFactory;

    protected $fillable = [
        'sex'
    ];

    public function getSexes()
    {
        $getSexes = Sex::with([
            'posts'
        ])
        ->get();

        // dd($getSexes);

        return $getSexes;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
