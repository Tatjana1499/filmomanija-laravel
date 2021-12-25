<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Http\Request;
use App\Http\Resources\Cl_Resource;
use App\Http\Resources\Cl_Collection;



class Cl_Controller extends Controller
{
    public function index()
    {
        $clanovi = Clan::all();
        return new Cl_Collection($clanovi);
    }
    public function show(Clan $clan)
    {
        return new Cl_Resource($clan);
    }
}
