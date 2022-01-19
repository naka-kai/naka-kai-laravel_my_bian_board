<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWantedRequest;
use App\Http\Requests\UpdateWantedRequest;
use App\Models\Wanted;

class WantedController extends Controller
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
     * @param  \App\Http\Requests\StoreWantedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWantedRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function show(Wanted $wanted)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function edit(Wanted $wanted)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWantedRequest  $request
     * @param  \App\Models\Wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWantedRequest $request, Wanted $wanted)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wanted  $wanted
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wanted $wanted)
    {
        //
    }
}
