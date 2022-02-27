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

    /**
     * 検索機能
     */
    public function searchPost($requests)
    {
        // dd($requests);

        $posts = Post::with([
            'age',
            'prefecture.area',
            'wanteds',
            'sexes'
        ])
            ->get()
            ->toArray();
        // dd($posts);

        $searchAreas = [];
        $searchPrefs = [];
        $searchSexes = [];
        $searchAges = [];
        $searchWanteds = [];

        // dd($requests['prefs']);
        if (isset($requests['prefs'])) {
            foreach ($requests['prefs'] as $area) {
                $searchAreas[] = $area;
            }
        }
        if (isset($requests['prefs'])) {
            foreach ($requests['prefs'] as $pref) {
                $searchPrefs[] = $pref;
            }
        }
        if (isset($requests['sexes'])) {
            foreach ($requests['sexes'] as $sex) {
                $searchSexes[] = $sex;
            }
        }
        if (isset($requests['ages'])) {
            foreach ($requests['ages'] as $age) {
                $searchAges[] = $age;
            }
        }
        if (isset($requests['wanteds'])) {
            foreach ($requests['wanteds'] as $wanted) {
                $searchWanteds[] = $wanted;
            }
        }
        // dd($searchAreas);
        // dd($posts);

        try {
            if ($searchAreas != null) {
                foreach ($posts as $post) {
                    // dd($post['prefecture']['area']);
                    if (is_array($post['prefecture']['area'])) {
                        foreach ($post['prefecture']['area'] as $areas) {
                            if (is_array($areas)) {
                                foreach ($areas as $area) {
                                    dd($area);
                                    if (in_array($area, $searchAreas)) {
                                        $datas[] = $area;
                                        $data = array_unique($datas);
                                    }
                                }
                            } else {
                                if (in_array($areas, $searchAreas)) {
                                    $datas[] = $areas;
                                    $data = array_unique($datas);
                                }
                            }
                        }
                    } else {
                        if (in_array($post['prefecture']['area'], $searchAreas)) {
                            $datas[] = $post['prefecture']['area'];
                            $data = array_unique($datas);
                        }
                    }
                }
            }

            if ($searchPrefs != null) {
                foreach ($posts as $post) {
                    unset($post['prefecture']['area_id'], $post['prefecture']['area']);
                    if (is_array($post['prefecture'])) {
                        foreach ($post['prefecture'] as $prefectures) {
                            if (is_array($prefectures)) {
                                foreach ($prefectures as $prefecture) {
                                    dd($prefecture);
                                    if (in_array($prefecture, $searchPrefs)) {
                                        $datas[] = $prefecture;
                                        $data = array_unique($datas);
                                    }
                                }
                            } else {
                                if (in_array($prefectures, $searchPrefs)) {
                                    $datas[] = $prefectures;
                                    $data = array_unique($datas);
                                }
                            }
                        }
                    } else {
                        if (in_array($post['prefecture'], $searchPrefs)) {
                            $datas[] = $post['prefecture'];
                            $data = array_unique($datas);
                        }
                    }
                }
            }

            if ($searchSexes != null) {
                foreach ($posts as $post) {
                    if (is_array($post['sexes'])) {
                        foreach ($post['sexes'] as $sexes) {
                            if (is_array($sexes)) {
                                foreach ($sexes as $sex) {
                                    if (in_array($sex, $searchSexes)) {
                                        $datas[] = $sex;
                                        $data = array_unique($datas);
                                    }
                                }
                            } else {
                                if (in_array($sexes, $searchAges)) {
                                    $datas[] = $sexes;
                                    $data = array_unique($datas);
                                }
                            }
                        }
                    } else {
                        if (in_array($post->sexes->sex, $searchSexes)) {
                            $datas[] = $post->sexes->sex;
                            $data = array_unique($datas);
                        }
                    }
                }
            }

            if ($searchAges != null) {
                foreach ($posts as $post) {
                    if (is_array($post['age'])) {
                        foreach ($post['age'] as $ages) {
                            if (is_array($ages)) {
                                foreach ($ages as $age) {
                                    if (in_array($age, $searchAges)) {
                                        $datas[] = $age;
                                        $data = array_unique($datas);
                                    }
                                }
                            } else {
                                if (in_array($ages, $searchAges)) {
                                    $datas[] = $ages;
                                    $data = array_unique($datas);
                                }
                            }
                        }
                    } else {
                        dd('age_not_array');
                    }
                }
            }

            if ($searchWanteds != null) {
                foreach ($posts as $post) {
                    if (is_array($post['wanteds'])) {
                        foreach ($post['wanteds'] as $wanteds) {
                            if (is_array($wanteds)) {
                                // dd('array');
                                foreach ($wanteds as $wanted) {
                                    if (in_array($wanted, $searchWanteds)) {
                                        $datas[] = $wanted;
                                        $data = array_unique($datas);
                                    }
                                }
                            } else {
                                if (in_array($wanteds, $searchWanteds)) {
                                    $datas[] = $wanteds;
                                    $data = array_unique($datas);
                                }
                            }
                        }
                    } else {
                        dd('wanted_not_array');
                    }
                }
            }

            if (!empty($data)) {
                // dd($data);
                return $data;
            } else {
                dd('else');
                return $data = null;
            }
        } catch (Exception $e) {
            // dd('catch');
            // echo $e;
            dd($e);
            $data = '';
            return redirect(route('post.index', 'data'));
        }
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
