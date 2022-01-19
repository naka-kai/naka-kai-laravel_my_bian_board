<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInsideRequest;
use App\Http\Requests\UpdateInsideRequest;
use App\Models\Inside;

class InsideController extends Controller
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
     * @param  \App\Http\Requests\StoreInsideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInsideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inside  $inside
     * @return \Illuminate\Http\Response
     */
    public function show(Inside $inside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inside  $inside
     * @return \Illuminate\Http\Response
     */
    public function edit(Inside $inside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInsideRequest  $request
     * @param  \App\Models\Inside  $inside
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsideRequest $request, Inside $inside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inside  $inside
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inside $inside)
    {
        //
    }
}
