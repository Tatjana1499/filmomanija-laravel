<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reditelj extends Model
{
    use HasFactory;

    protected $fillable = [
        'imeReditelja',
        'prezimeReditelja',
        'drzavaReditelja'
    ];


}
