<?php

namespace App\Http\Controllers;

use App\Models\Clan;
use Illuminate\Http\Request;
use App\Http\Resources\Cl_Resource;
use App\Http\Resources\Cl_Collection;
use Illuminate\Support\Facades\Validator;


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
    //za cuvanje novog clana
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'imeClana' => 'required|string|max:100',
            'prezimeClana' => 'required|string|max:100',
            'clanstvoID' => 'required'  
        ]);
        if ($validator->fails())
            return response()->json($validator->errors()); 
        $clan = Clan::create([
            'imeClana' => $request->imeClana,
            'prezimeClana' => $request->prezimeClana,
            'clanstvoID' => $request->clanstvoID
        ]);
        return response()->json(['Clan je kreiran.', new Cl_Resource($clan)]);
    }
    public function update(Request $request, Clan $clan)
    {
        $validator = Validator::make($request->all(), [
            'imeClana' => 'required|string|max:100',
            'prezimeClana' => 'required|string|max:100',
            'clanstvoID' => 'required'
        ]);
        if ($validator->fails())
            return response()->json($validator->errors());
        $clan->imeClana = $request->imeClana;
        $clan->prezimeClana = $request->prezimeClana;
        $clan->clanstvoID = $request->clanstvoID;
        $clan->save();
        return response()->json(['Podaci o clanu su azurirani.', new Cl_Resource($clan)]);
    }
    public function destroy(Clan $clan)
    {
        $clan->delete();

        return response()->json('Podaci o clanu su obrisani.');
    }
}
