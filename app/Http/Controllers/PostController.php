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
        $getPosts = $post->getPosts();

        $prefecture = new Prefecture;
        $linkAreaPrefectures = $prefecture->linkAreaPrefectures();
        $areaClasses = $prefecture->areaClass();

        $sex = new Sex;
        $getSexes = $sex->getSexes();

        $age = new Age;
        $getAges = $age->getAges();

        $wanted = new Wanted;
        $getWanteds = $wanted->getWanteds();

        return view('post.index', compact('getPosts', 'linkAreaPrefectures', 'areaClasses', 'getSexes', 'getAges', 'getWanteds'));
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
        $getAges = $age->getAges();

        $wanted = new Wanted;
        $getWanteds = $wanted->getWanteds();

        $prefecture = new Prefecture;
        $getPrefectures = $prefecture->getPrefectures();

        $sex = new Sex;
        $getSexes = $sex->getSexes();

        return view('post.create', compact('getAges', 'getWanteds', 'getPrefectures', 'getSexes'));
    }

    public function create_confirm(Request $request)
    {

        $age = new Age;
        $getAges = $age->getAges();

        $wanted = new Wanted;
        $getWanteds = $wanted->getWanteds();

        $prefecture = new Prefecture;
        $getPrefectures = $prefecture->getPrefectures();

        $sex = new Sex;
        $getSexes = $sex->getSexes();

        $inputs = $request->all();

        // dd($inputs);

        foreach($getAges as $age) {
            if($age->id == $inputs['age']) {
                $inputs['age_id'] = $age->id;
                $inputs['age'] = $age->age;
            }
        }

        foreach ($getWanteds as $wanted) {
            if ($wanted->id == $inputs['wanted']) {
                $inputs['wanted_id'] = $wanted->id;
                $inputs['wanted'] = $wanted->wanted;
            }
        }

        // dd($getPrefectures);

        foreach ($getPrefectures as $prefecture) {
            if ($prefecture->id == $inputs['prefecture']) {
                $inputs['prefecture_id'] = $prefecture->id;
                $inputs['prefecture'] = $prefecture->prefecture;
            }
        }

        foreach ($getSexes as $sex) {
            if ($sex->id == $inputs['sex']) {
                $inputs['sex_id'] = $sex->id;
                $inputs['sex'] = $sex->sex;
            }
        }

        // dd($inputs);

        return view('post.create_confirm', compact('inputs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $inputs = $request->all();
        // dd($inputs);

        DB::beginTransaction();
        try {

            $wanted_id = $request->wanted;
            $sex_id = $request->sex;
            // dd($wanted_id);

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
    public function show(Post $post)
    {
        //
        return view('post.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
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
