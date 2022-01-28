<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Area extends Model
{
    use HasFactory;

    protected $fillable = [
        'area'
    ];

    public function getAreas()
    {
        $getAreas = Area::all();
    }

    public function prefectures()
    {
        return $this->hasMany(Prefecture::class);
    }
}
