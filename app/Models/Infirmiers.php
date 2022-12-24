<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infirmiers extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'lname',
    'specilaity',
    'gender',
    'service',
    'phone',
    'inf_id'
    ];
}
