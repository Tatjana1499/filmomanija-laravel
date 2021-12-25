<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iznajmljivanje extends Model
{
    use HasFactory;

    public function filmID(){
        return $this->belongsTo(Film::class);
    }
    public function clanID(){
        return $this->belongsTo(Clan::class);
    }
}
