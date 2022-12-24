<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_p',
        'fname_p',
        'id_p',
        'bloodtype_p',
        'age_p',
        'remarque_event',
        'sexe',
        'date'
    ];
}
