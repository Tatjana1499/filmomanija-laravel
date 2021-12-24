<?php

namespace App\Http\Controllers;

use App\Models\Clanstvo;
use App\Http\Resources\ClanstvoResource;
use Illuminate\Http\Request;

class ClanstvoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clanstvo = Clanstvo::all();
        return ClanstvoResource::collection($clanstvo);
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
     * @param  \App\Models\Clanstvo  $clanstvo
     * @return \Illuminate\Http\Response
     */
    public function show(Clanstvo $clanstvo)
    {
        return new ClanstvoResource($clanstvo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Clanstvo  $clanstvo
     * @return \Illuminate\Http\Response
     */
    public function edit(Clanstvo $clanstvo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Clanstvo  $clanstvo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clanstvo $clanstvo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Clanstvo  $clanstvo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clanstvo $clanstvo)
    {
        //
    }
}
