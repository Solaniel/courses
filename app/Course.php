<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'courseName','conDate','duration','lecturer','organisation','location'
    ];
}
