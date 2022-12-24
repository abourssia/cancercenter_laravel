<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $fillable = [
        'prenomfr',
        'nomfr',
        'fonctionfr',
        'gradefr',
        'nomar',
        'prenomar',
        'fonctionar',
        'gradear',
        'numtel',
        'email',
        'typefr',
        'durefr',
        'paysfr',
        'univfr',
        'typear',
        'durear',
        'paysar',
        'univar',
        'ouinon',
        'annee',
        'bourse',
        'butfr',
        'methofr',
        'resfr',
        'butar',
        'methoar',
        'resar',
        'session',
    ];
}
