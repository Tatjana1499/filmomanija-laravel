<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Resources\Fm_Resource;
use App\Http\Resources\Fm_Collection;


class Fm_Controller extends Controller
{
    public function index()
    {
         $filmovi = Film::all();
         return new Fm_Collection($filmovi);
    }
    public function show(Film $film)
    {
        return new Fm_Resource($film);
    }
}
