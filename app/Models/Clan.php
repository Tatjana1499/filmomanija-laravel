<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    use HasFactory;
    protected $fillable = [
        'imeClana',
        'prezimeClana',
        'clanstvoID'
    ];
    public function vrstaClanstva(){
        return $this->belongsTo(Clanstvo::class, 'clanstvoID');
    }
    public function iznajmljivanjes(){
        return $this->hasMany(Iznajmljivanje::class);
    }
}