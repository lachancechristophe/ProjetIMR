<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donnee_bouee extends Model
{
    protected $fillable = [
        'id_bouee',
        'temperature',
        'salinite',
        'debit',
        'valide',
        'date_temps',
        'latitude',
        'longitude',
        'batterie'
    ];
}
