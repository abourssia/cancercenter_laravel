<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malades extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lname',
        'gender',
        'age',
        'bloodgroup',
        'address',
        'phone',
        'maladie',
        'id_medecin',
        'pat_id',
        'date_hosp'
        ];
}
