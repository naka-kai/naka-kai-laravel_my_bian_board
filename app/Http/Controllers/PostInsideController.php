<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost_insideRequest;
use App\Http\Requests\UpdatePost_insideRequest;
use App\Models\Post_inside;

class PostInsideController extends Controller
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
     * @param  \App\Http\Requests\StorePost_insideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost_insideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post_inside  $post_inside
     * @return \Illuminate\Http\Response
     */
    public function show(Post_inside $post_inside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post_inside  $post_inside
     * @return \Illuminate\Http\Response
     */
    public function edit(Post_inside $post_inside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePost_insideRequest  $request
     * @param  \App\Models\Post_inside  $post_inside
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePost_insideRequest $request, Post_inside $post_inside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post_inside  $post_inside
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post_inside $post_inside)
    {
        //
    }
}
