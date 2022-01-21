<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSexRequest;
use App\Http\Requests\UpdateSexRequest;
use App\Models\Sex;

class SexController extends Controller
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
     * @param  \App\Http\Requests\StoreSexRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sex  $sex
     * @return \Illuminate\Http\Response
     */
    public function show(Sex $sex)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sex  $sex
     * @return \Illuminate\Http\Response
     */
    public function edit(Sex $sex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSexRequest  $request
     * @param  \App\Models\Sex  $sex
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSexRequest $request, Sex $sex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sex  $sex
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sex $sex)
    {
        //
    }
}
