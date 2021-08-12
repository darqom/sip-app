<?php

namespace App\Models;

use App\Traits\SaveToUpper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, SaveToUpper;

    protected $fillable = [
        'fullname', 'national_registration_number', 'school_registration_number', 'vocation_id', 'class', 'birth_date', 'birth_place', 'email', 'phone', 'password', 'photo', 'active'
    ];

    protected $no_uppercase = [
        'email', 'password', 'photo'
    ];
}
