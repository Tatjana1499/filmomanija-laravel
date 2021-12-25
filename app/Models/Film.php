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
    public function reditelj(){
        return $this->belongsTo(Reditelj::class, 'rediteljID');
    }
    public function zanr(){
        return $this->belongsTo(Zanr::class, 'zanrID');
    }
    public function iznajmljivanjes(){
        return $this->hasMany(Iznajmljivanje::class);
    }
}