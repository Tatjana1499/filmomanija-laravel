<?php

namespace App\Http\Controllers;

use App\Models\Zanr;
use Illuminate\Http\Request;
use App\Http\Resources\Zn_Resource;
use App\Http\Resources\Zn_Collection;



class Zn_Controller extends Controller
{
    public function index()
    {
        $zanrovi = Zanr::all();
        return new Zn_Collection($zanrovi);
    }
    public function show(Zanr $zanr)
    {
        return new Zn_Resource($zanr);
    }
}
