<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public $fillable = [
        'personal_number',
        'avatar_path',
        'first_name',
        'family_name',
        'birth_name',
        'birth_date',
        'birth_place',
        'country_of_birth_id',
        'gender_id',
        'nationality_id',
        'mobile',
        'tel',
        'email_private',
        'street',
        'house_number',
        'zip_code',
        'city',
        'country_id',
    ];
}
