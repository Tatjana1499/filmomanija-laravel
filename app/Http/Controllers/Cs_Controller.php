<?php

namespace App\Http\Controllers;

use App\Models\Clanstvo;
use Illuminate\Http\Request;
use App\Http\Resources\Cs_Resource;
use App\Http\Resources\Cs_Collection;



class Cs_Controller extends Controller
{
    public function index()
    {
        $clanstva = Clanstvo::all();
        return new Cs_Collection($clanstva);
    }
    public function show(Clanstvo $clanstvo)
    {
        return new Cs_Resource($clanstvo);
    }
}
