<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
            use HasFactory;

       protected $fillable = [
        'skill_name',
        'skill_image',
        'skill_parcentage',
        'define_summary',
        'develop_summary',
        'deliver_summary',
    ];
}
