<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;

class Prefecture extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefecture'
    ];

    public function getPrefectures()
    {

        $getPrefectures = Prefecture::with([
            'area'
        ])
            ->get();

        dd($getPrefectures);
    }

    public function linkAreaPrefectures()
    {
        $areas = Area::all();
        $prefectures = Prefecture::all();

        $linkAreaPrefectures = [];
        foreach ($areas as $area) {
            foreach ($prefectures as $prefecture) {
                if($prefecture->area_id == $area->id) {
                    $linkAreaPrefectures[$area->area][$prefecture->id] = $prefecture->prefecture;
                }
            }
        }
        return $linkAreaPrefectures;
    }

    public function areaClass()
    {
        $areas = Area::all();

        foreach ($areas as $area) {
            if ($area->id == 1) {
                $areaClasses[$area->area] = 'hokk';
            } elseif ($area->id == 2) {
                $areaClasses[$area->area] = 'toho';
            } elseif ($area->id == 3) {
                $areaClasses[$area->area] = 'kan';
            } elseif ($area->id == 4) {
                $areaClasses[$area->area] = 'chubu';
            } elseif ($area->id == 5) {
                $areaClasses[$area->area] = 'kin';
            } elseif ($area->id == 6) {
                $areaClasses[$area->area] = 'chug';
            } elseif ($area->id == 7) {
                $areaClasses[$area->area] = 'sik';
            } elseif ($area->id == 8) {
                $areaClasses[$area->area] = 'kyu';
            }
        }
        // dd($areaClasses);
        return $areaClasses;
    }

    public function post()
    {
        return $this->hasOne(Post::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
