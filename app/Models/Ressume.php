<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ressume extends Model
{
     use HasFactory;

       protected $fillable = [
        'institute_name',
        'institute_summary',
        'pass_year',
        'designation',
        'designation_summary',
    ];
}
