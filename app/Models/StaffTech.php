<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffTech extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'lname',
        'gender',
        'poste',
        'phone',
        'tech_id'
        ];
}
