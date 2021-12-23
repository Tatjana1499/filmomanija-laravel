<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'nazivFilma',
        'rediteljID',
        'zanrID'
    ];


    public function rediteljID(){
        return $this->belongsTo(Reditelj::class);
    }


    public function zanrID(){
        return $this->belongsTo(Zanr::class);
    }


    public function iznajmljivanjes(){
        return $this->hasMany(Iznajmljivanje::class);
    }


}
