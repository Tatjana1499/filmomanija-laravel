<?php

namespace App\Http\Controllers;

use App\Models\Reditelj;
use Illuminate\Http\Request;
use App\Http\Resources\Rd_Resource;
use App\Http\Resources\Rd_Collection;



class Rd_Controller extends Controller
{
    public function index()
    {
        $reditelji = Reditelj::all();
        return new Rd_Collection($reditelji);
    }
    public function show(Reditelj $reditelj)
    {
        return new Rd_Resource($reditelj);
    }
}
