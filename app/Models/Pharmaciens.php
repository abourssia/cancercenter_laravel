<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmaciens extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lname',
        'gender',
        'phone',
        'pharm_id'
        ];
}
