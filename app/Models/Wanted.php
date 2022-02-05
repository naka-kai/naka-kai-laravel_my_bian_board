<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wanted extends Model
{
    use HasFactory;

    protected $fillable = [
        'wanted',
        'inputName',
    ];

    public function getWanteds()
    {
        $get_wanted = Wanted::all();

        // dd($getWanted);

        return $get_wanted;
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
