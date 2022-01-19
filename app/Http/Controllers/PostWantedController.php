<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost_wantedRequest;
use App\Http\Requests\UpdatePost_wantedRequest;
use App\Models\Post_wanted;

class PostWantedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePost_wantedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost_wantedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post_wanted  $post_wanted
     * @return \Illuminate\Http\Response
     */
    public function show(Post_wanted $post_wanted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post_wanted  $post_wanted
     * @return \Illuminate\Http\Response
     */
    public function edit(Post_wanted $post_wanted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePost_wantedRequest  $request
     * @param  \App\Models\Post_wanted  $post_wanted
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost_wantedRequest $request, Post_wanted $post_wanted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post_wanted  $post_wanted
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_wanted $post_wanted)
    {
        //
    }
}
