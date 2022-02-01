<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Http\Request;
use App\Models\Age;
use App\Models\Area;
use App\Models\Post;
use App\Models\Post_sex;
use App\Models\Prefecture;
use App\Models\Sex;
use App\Models\Wanted;

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
        $inputs = $request->all();

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
        Post::create([
            'title' => $request->title,
            'name' => $request->name,
            'age_id' => $request->age,
            'prefecture_id' => $request->prefecture,
            'email' => $request->email,
            'content' => $request->content,
        ]);

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
