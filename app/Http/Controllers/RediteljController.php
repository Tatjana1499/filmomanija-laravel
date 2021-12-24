<?php

namespace App\Http\Controllers;

use App\Models\Reditelj;
use Illuminate\Http\Request;
use App\Http\Resources\RediteljResource;


class RediteljController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reditelj = Reditelj::all();
        return RediteljResource::collection($reditelj);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function show(Reditelj $reditelj)
    {
        return new RediteljResource($reditelj);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function edit(Reditelj $reditelj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reditelj $reditelj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reditelj $reditelj)
    {
        //
    }
}
