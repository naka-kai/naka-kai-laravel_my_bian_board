<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOutsideRequest;
use App\Http\Requests\UpdateOutsideRequest;
use App\Models\Outside;

class OutsideController extends Controller
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
     * @param  \App\Http\Requests\StoreOutsideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOutsideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outside  $outside
     * @return \Illuminate\Http\Response
     */
    public function show(Outside $outside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outside  $outside
     * @return \Illuminate\Http\Response
     */
    public function edit(Outside $outside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOutsideRequest  $request
     * @param  \App\Models\Outside  $outside
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOutsideRequest $request, Outside $outside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outside  $outside
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outside $outside)
    {
        //
    }
}
