<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laborantines extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lname',
        'gender',
        'phone',
        'labo_id'
        ];
}
