<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
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

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = session()->all();
        dd($inputs['title']);

        DB::beginTransaction();
        try {

            $wanted_id = $request->wanted;
            $sex_id = $request->sex;
            // dd($wanted_id);

            $password = $request->password;
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
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        //
        $post = new Post;
        $get_posts = $post->getPosts();
        $detail_post = $get_posts->find($id);

        // dd($detailPost);

        // dd($getPosts);

        return view('post.show', compact('id', 'detail_post'));
    }

    /**
     * 編集時のパスワード確認
     */
    public function editPassConfirm()
    {
        return redirect()->route('post.edit');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

    }

    /**
     * 編集内容確認画面
     */
    public function editConfirm()
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
