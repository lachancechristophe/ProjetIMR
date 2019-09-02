<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bouee extends Model
{
    protected $fillable = [
        'id',
        'numero',
        'description',
        'date_debut',
        'latitude',
        'longitude'
    ];
}
