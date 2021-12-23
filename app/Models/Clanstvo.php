<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clanstvo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazivClanstva'
    ];


    public function clans(){
        return $this->hasMany(Clan::class);
    }



}
