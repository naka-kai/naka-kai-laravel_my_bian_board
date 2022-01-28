<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

        foreach ($areas as $area) {
            foreach ($prefectures as $prefectureKey => $prefectureVal) {
                // dd($area);
                if($prefectureVal->area_id == $area->id) {
                    $linkAreaPrefecture[$area->area][] = [$prefectureVal->prefecture, $prefectureVal->id];
                }
            }
            $linkAreaPrefectures[] = $linkAreaPrefecture;
            // $linkAreaPrefecture = [];
        }
        // dd($linkAreaPrefecture);
        return $linkAreaPrefecture;
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
