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
    public function index()
    {
        //
        $post = new Post;
        $get_posts = $post->getPosts();

        // dd($getPosts);

        $prefecture = new Prefecture;
        $link_area_prefectures = $prefecture->linkAreaPrefectures();
        $area_classes = $prefecture->areaClass();

        $sex = new Sex;
        $get_sexes = $sex->getSexes();

        $age = new Age;
        $get_ages = $age->getAges();

        $wanted = new Wanted;
        $get_wanteds = $wanted->getWanteds();

        return view('post.index', compact('get_posts', 'link_area_prefectures', 'area_classes', 'get_sexes', 'get_ages', 'get_wanteds'));
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
        $inputs = $request->all();
        // $request->session()->put($inputs);

        $age = new Age;
        $get_ages = $age->getAges();

        $wanted = new Wanted;
        $get_wanteds = $wanted->getWanteds();

        $prefecture = new Prefecture;
        $get_prefectures = $prefecture->getPrefectures();

        $sex = new Sex;
        $get_sexes = $sex->getSexes();

        $validated = $request->validated();

        foreach($get_ages as $age) {
            if($age->id == $inputs['age']) {
                $inputs['age_id'] = $age->id;
                $inputs['age'] = $age->age;
            }
        }

        foreach ($get_wanteds as $wanted) {
            if ($wanted->id == $inputs['wanted']) {
                $inputs['wanted_id'] = $wanted->id;
                $inputs['wanted'] = $wanted->wanted;
            }
        }

        // dd($getPrefectures);

        foreach ($get_prefectures as $prefecture) {
            if ($prefecture->id == $inputs['prefecture']) {
                $inputs['prefecture_id'] = $prefecture->id;
                $inputs['prefecture'] = $prefecture->prefecture;
            }
        }

        foreach ($get_sexes as $sex) {
            if ($sex->id == $inputs['sex']) {
                $inputs['sex_id'] = $sex->id;
                $inputs['sex'] = $sex->sex;
            }
        }

        // dd($inputs);

        return view('post.createConfirm', compact('inputs', 'validated'));
    }

    /**
     * 投稿機能
     */
    public function store(Request $request)
    {
        // $inputs = session()->all();
        // dd($inputs['title']);

        DB::beginTransaction();
        try {

            $wanted_id = $request->wanted;
            $sex_id = $request->sex;
            // dd($wanted_id);

            $password = Hash::make($request->password);
            $password_confirmation = $request->password_confirmation;

            dd($password);

            $post = new Post;
            $post->title = $request->title;
            $post->name = $request->name;
            $post->age_id = $request->age;
            $post->prefecture_id = $request->prefecture;
            $post->email = $request->email;
            $post->content = $request->content;
            $post->save();

            $post->wanteds()->attach($wanted_id);
            $post->sexes()->attach($sex_id);

        } catch (Exception $e) {
            DB::rollback();
            return back()->withInput();
        }
        DB::commit();
        return redirect()->route('post.index');
    }

    /**
     * 個人詳細画面
     */
    public function show(Post $post, $id)
    {
        //
        $post = new Post;
        $get_posts = $post->getPosts();
        $detail_post = $get_posts->find($id);

        // dd($detailPost);

        // dd($getPosts);

        return view('post.show_message', compact('id', 'detail_post'));
    }

    /**
     * 編集時のパスワード確認
     */
    public function editPassConfirm($id)
    {
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

        if($request->get('back')) {
            return redirect('post/'. $id);
        }

        $post = new Post;
        $get_posts = $post->getPosts();
        $detail_post = $get_posts->find($id);

        $passCheck = Hash::check($request->password, $detail_post->password);

        $validated = $request->validate([
            'password' => 'required|min:8|string',
        ]);

        // dd($passCheck);

        if($passCheck) {
            // dd('ok');
            return view('post.edit', compact('id', 'detail_post'));
        } else {
            // dd('no');
            return redirect()->route('post.editPassConfirm', compact('id'))->with(['notPass', 'パスワードが一致しません']);
        }
    }

    /**
     * 編集内容確認画面
     */
    public function editConfirm()
    {

    }

    /**
     * 個人詳細変更機能
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * 個人詳細削除機能
     */
    public function destroy(Post $post)
    {
        //
    }
}
