<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medecins extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lname',
        'specialization',
        'gender',
        'service',
        'address',
        'phone',
        'med_id'
        ];
}
