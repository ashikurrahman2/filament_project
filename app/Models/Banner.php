<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
       use HasFactory;

    protected $fillable = [
        'person_image',
        'banner_title',
        'person_name',
        'person_designation',
        'person_country',
        'total_experience',
        'complete_projects',
        'client_satisfaction',
        'total_awards',
    ];
}
