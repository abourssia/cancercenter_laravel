<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffContract extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lname',
        'gender',
        'poste',
        'phone',
        'contract_id'
        ];
}
