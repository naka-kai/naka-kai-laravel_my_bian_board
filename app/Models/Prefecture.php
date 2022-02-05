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

        $get_prefectures = Prefecture::with([
            'area'
        ])
        ->get();

        // dd($getPrefectures);
        return $get_prefectures;
    }

    public function linkAreaPrefectures()
    {
        $areas = Area::all();
        $prefectures = Prefecture::all();

        $link_area_prefectures = [];
        foreach ($areas as $area) {
            foreach ($prefectures as $prefecture) {
                if ($prefecture->area_id == $area->id) {
                    $link_area_prefectures[$area->area][$prefecture->id] = $prefecture->prefecture;
                }
            }
        }
        return $link_area_prefectures;
    }

    public function areaClass()
    {
        $areas = Area::all();

        foreach ($areas as $area) {
            if ($area->id == 1) {
                $area_classes[$area->area] = 'hokk';
            } elseif ($area->id == 2) {
                $area_classes[$area->area] = 'toho';
            } elseif ($area->id == 3) {
                $area_classes[$area->area] = 'kan';
            } elseif ($area->id == 4) {
                $area_classes[$area->area] = 'chubu';
            } elseif ($area->id == 5) {
                $area_classes[$area->area] = 'kin';
            } elseif ($area->id == 6) {
                $area_classes[$area->area] = 'chug';
            } elseif ($area->id == 7) {
                $area_classes[$area->area] = 'sik';
            } elseif ($area->id == 8) {
                $area_classes[$area->area] = 'kyu';
            }
        }
        // dd($areaClasses);
        return $area_classes;
    }

    public function posts()
    {
        return $this->hasOne(Post::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
