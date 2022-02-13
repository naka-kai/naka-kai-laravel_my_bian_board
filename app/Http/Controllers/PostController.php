<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\MessageRequest;
use Illuminate\Http\Request;
use App\Models\Age;
use App\Models\Area;
use App\Models\Post;
use App\Models\Post_sex;
use App\Models\Post_wanted;
use App\Models\Prefecture;
use App\Models\Sex;
use App\Models\Wanted;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    /**
     * 掲示板画面
     */
    public function index(Request $request)
    {
        //
        $data = $this->searchPost($request);

        if($data != null) {

            if($data != null) {
                $posts = DB::table('posts')
                    ->join('ages', 'ages.id', '=', 'posts.age_id')
                    ->join('prefectures', 'prefectures.id', '=', 'posts.prefecture_id')
                    ->join('areas', 'areas.id', '=', 'prefectures.area_id')
                    ->join('wanteds', 'wanteds.id', '=', 'posts.id')
                    ->join('sexes', 'sexes.id', '=', 'posts.id')
                    ->get();

                foreach ($posts as $post) {
                    $search = $posts;
                    if(in_array($post->prefecture_id, $data)) {
                        $search = $search->where('prefecture_id', '=', $post->prefecture_id);
                    }
                    if (in_array($post->sex, $data)) {
                        $search = $search->where('sex', '=', $post->sex);
                    }
                    if (in_array($post->age, $data)) {
                        $search = $search->where('age', '=', $post->age);
                    }
                    if (in_array($post->wanted, $data)) {
                        $search = $search->where('wanted', '=', $post->wanted);
                    }
                }
            }
        };

        // dd($search);

        $request->session()->flush();

        $post = new Post;
        $get_posts = $post->getPosts();

        $prefecture = new Prefecture;
        $link_area_prefectures = $prefecture->linkAreaPrefectures();
        $area_classes = $prefecture->areaClass();

        $sex = new Sex;
        $get_sexes = $sex->getSexes();

        $age = new Age;
        $get_ages = $age->getAges();
        // dd($get_ages);

        $wanted = new Wanted;
        $get_wanteds = $wanted->getWanteds();

        return view('post.index', compact('get_posts', 'link_area_prefectures', 'area_classes', 'get_sexes', 'get_ages', 'get_wanteds', 'data', 'search'));
    }

    /**
     * 新規投稿画面
     */
    public function create()
    {
        //
        $age = new Age;
        $get_ages = $age->getAges();

        $wanted = new Wanted;
        $get_wanteds = $wanted->getWanteds();

        $prefecture = new Prefecture;
        $get_prefectures = $prefecture->getPrefectures();

        $sex = new Sex;
        $get_sexes = $sex->getSexes();

        return view('post.create', compact('get_ages', 'get_wanteds', 'get_prefectures', 'get_sexes'));
    }

    /**
     * 投稿確認画面
     */
    public function createConfirm(StorePostRequest $request)
    {

        list($inputs, $validated) = $this->confirmFun($request);

        return view('post.create_confirm', compact('inputs', 'validated'));
    }

    /**
     * 投稿機能
     */
    public function store(Request $request)
    {

        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if ($action == 'back') {
            $request->session()->flush();
            return redirect()->route('post.create')->withInput();
        }

        $inputs = session()->all();

        DB::beginTransaction();
        try {

            $wanted_id = $request->wanted;
            $sex_id = $request->sex;

            $password = Hash::make($inputs['password']);

            $post = new Post;
            $post->title = $inputs['title'];
            $post->name = $inputs['name'];
            $post->age_id = $inputs['age'];
            $post->prefecture_id = $inputs['prefecture'];
            $post->email = $inputs['email'];
            $post->content = $inputs['content'];
            $post->password = $password;
            $post->save();

            $post->wanteds()->attach($wanted_id);
            $post->sexes()->attach($sex_id);
        } catch (Exception $e) {
            DB::rollback();
            return back()->withInput();
            $request->session()->flush();
        }
        DB::commit();

        list($get_posts, $link_area_prefectures, $area_classes, $get_sexes, $get_ages, $get_wanteds) = $this->redirectIndexFun();

        $request->session()->flush();

        return redirect()->route('post.index', compact('get_posts', 'link_area_prefectures', 'area_classes', 'get_sexes', 'get_ages', 'get_wanteds'));
    }

    /**
     * 個人詳細画面
     */
    public function show($id)
    {
        //
        $post = new Post;
        $get_posts = $post->getPosts();
        $detail_post = $get_posts->find($id);


        return view('post.show_message', compact('id', 'detail_post'));
    }

    /**
     * 編集時のパスワード確認
     */
    public function editPassConfirm(Request $request, $id)
    {
        // dd($request->all());
        $inputs = $request->all();
        $request->session()->put($inputs);

        $post = new Post;
        $get_posts = $post->getPosts();
        $detail_post = $get_posts->find($id);

        return view('post.edit_pass_confirm', compact('id', 'detail_post'));
    }


    /**
     * 個人詳細編集画面
     */
    public function edit(Request $request, $id)
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if ($action == 'back') {
            $request->session()->flush();
            return redirect()->route('post.show_message', compact('id'));
        }

        $data = $request->session()->all();

        $post = new Post;
        $get_posts = $post->getPosts();
        $detail_post = $get_posts->find($id);

        $age = new Age;
        $get_ages = $age->getAges();

        $wanted = new Wanted;
        $get_wanteds = $wanted->getWanteds();

        $prefecture = new Prefecture;
        $get_prefectures = $prefecture->getPrefectures();

        $sex = new Sex;
        $get_sexes = $sex->getSexes();

        $passCheck = Hash::check($request->password, $detail_post->password);

        $validated = $request->validate([
            'password' => 'required|min:8|string',
        ]);

        if ($passCheck) {
            return view('post.edit', compact('id', 'detail_post', 'data', 'get_ages', 'get_wanteds', 'get_prefectures', 'get_sexes'));
        } else {
            // return redirect()->route('post.editPassConfirm', compact('id'))->with(['notPass', 'パスワードが一致しません']);
            return redirect(route('post.editPassConfirm', compact('id')))->with(['notPass', 'パスワードが一致しません']);
        }
    }

    /**
     * 編集内容確認画面
     */
    public function editConfirm(UpdatePostRequest $request, $id)
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if ($action == 'back') {
            return redirect()->route('post.editPassConfirm', compact('id'));
        }

        list($inputs, $validated) = $this->confirmFun($request);

        return view('post.edit_confirm', compact('id', 'inputs', 'validated'));
    }

    /**
     * 個人詳細変更機能
     */
    public function update(Request $request)
    {
        //
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if ($action == 'back') {
            // dd('back');
            $request->session()->flush();
            return redirect()->route('post.editPassConfirm');
        }

        $inputs = session()->all();

        DB::beginTransaction();
        try {
            // dd('ok');
            $wanted_id = $request->wanted;
            $sex_id = $request->sex;

            $post = new Post;
            $post->title = $inputs['title'];
            $post->name = $inputs['name'];
            $post->age_id = $inputs['age'];
            $post->prefecture_id = $inputs['prefecture'];
            $post->email = $inputs['email'];
            $post->content = $inputs['content'];
            dd($post);
            $post->save();
            dd('save');

            $post->wanteds()->attach($wanted_id);
            $post->sexes()->attach($sex_id);
        } catch (Exception $e) {
            // dd('no');
            DB::rollback();
            $request->session()->flush();
            return back()->withInput();
        }
        DB::commit();


        list($get_posts, $link_area_prefectures, $area_classes, $get_sexes, $get_ages, $get_wanteds) = $this->redirectIndexFun();

        $request->session()->flush();

        return redirect()->route('post.index', compact('get_posts', 'link_area_prefectures', 'area_classes', 'get_sexes', 'get_ages', 'get_wanteds'));
    }

    /**
     * 個人詳細削除機能
     */
    public function destroy(Post $post)
    {
        //
    }

    /**
     * confirm機能があるところに使う変数をまとめた
     */
    public function confirmFun(Request $request)
    {
        $inputs = $request->all();
        $request->session()->put($inputs);

        $age = new Age;
        $get_ages = $age->getAges();

        $wanted = new Wanted;
        $get_wanteds = $wanted->getWanteds();

        $prefecture = new Prefecture;
        $get_prefectures = $prefecture->getPrefectures();

        $sex = new Sex;
        $get_sexes = $sex->getSexes();

        $validated = $request->validated();

        foreach ($get_ages as $age) {
            if ($age->id == $inputs['age']) {
                $inputs['age_id'] = $age->id;
                $inputs['age'] = $age->age;
            }
        }

        if ($request->has('wanted')) {
            foreach ($get_wanteds as $wanted) {
                if (in_array($wanted->id, (array)$inputs['wanted'])) {
                    $inputs['wanted_id'][] = $wanted->id;
                    $inputs['wanteds'][] = $wanted->wanted;
                }
            }
        }

        foreach ($get_prefectures as $prefecture) {
            if ($prefecture->id == $inputs['prefecture']) {
                $inputs['prefecture_id'] = $prefecture->id;
                $inputs['prefecture'] = $prefecture->prefecture;
            }
        }

        if ($request->has('sex')) {
            foreach ($get_sexes as $sex) {
                if (in_array($sex->id, (array)$inputs['sex'])) {
                    $inputs['sex_id'][] = $sex->id;
                    $inputs['sexes'][] = $sex->sex;
                }
            }
        }
        return array($inputs, $validated);
    }

    /**
     * indexにredirectがあるところに使う変数をまとめた
     */
    public function redirectIndexFun()
    {
        $post = new Post;
        $get_posts = $post->getPosts();

        $prefecture = new Prefecture;
        $link_area_prefectures = $prefecture->linkAreaPrefectures();
        $area_classes = $prefecture->areaClass();

        $sex = new Sex;
        $get_sexes = $sex->getSexes();

        $age = new Age;
        $get_ages = $age->getAges();

        $wanted = new Wanted;
        $get_wanteds = $wanted->getWanteds();

        return array($get_posts, $link_area_prefectures, $area_classes, $get_sexes, $get_ages, $get_wanteds);
    }

    /**
     * 検索機能
     */
    public function searchPost(Request $request)
    {
        $posts = DB::table('posts')
            ->join('ages', 'ages.id', '=', 'posts.age_id')
            ->join('prefectures', 'prefectures.id', '=', 'posts.prefecture_id')
            ->join('areas', 'areas.id', '=', 'prefectures.area_id')
            ->leftJoin('wanteds', 'wanteds.id', '=', 'posts.id')
            ->leftJoin('sexes', 'sexes.id', '=', 'posts.id')
            ->get()
            ->toArray();
        // dd($posts);

        $searchPrefs = $request->input('prefs');
        $searchSexes = $request->input('sexes');
        $searchAges = $request->input('ages');
        $searchWanteds = $request->input('wanteds');

        try {
            if ($request->has('prefs') && $searchPrefs != null) {
                foreach ($posts as $post) {
                    if (in_array($post->prefecture_id, $searchPrefs)) {
                        $datas[] = $post->prefecture_id;
                        $data = array_unique($datas);
                    }
                }
            }
            if ($request->has('sexes') && $searchSexes != null) {
                foreach ($posts as $post) {
                    if (in_array($post->sex, $searchSexes)) {
                        $datas[] = $post->sex;
                        $data = array_unique($datas);
                    }
                }
            }
            if ($request->has('ages') && $searchAges != null) {
                foreach ($posts as $post) {
                    if (in_array($post->age, $searchAges)) {
                        $datas[] = $post->age;
                        $data = array_unique($datas);
                    }
                }
            }
            if ($request->has('wanteds') && $searchWanteds != null) {
                foreach ($posts as $post) {
                    if (in_array($post->wanted, $searchWanteds)) {
                        $datas[] = $post->wanted;
                        $data = array_unique($datas);
                    }
                }
            }

            if(!empty($data)) {
                // dd('true');
                return $data;
            } else {
                // dd('else');
                return $data = null;
            }

        } catch (e) {
            // dd('catch');
            $data = '';
            return redirect(route('post.index', 'data'));
        }
    }
}
