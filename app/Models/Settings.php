<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
              use HasFactory;

       protected $fillable = [
        'logo',
        'favicon',
        'address',
        'phone_one',
        'phone_two',
        'email',
        'social_link',
        'linked_link',
    ];
}
