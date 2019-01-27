<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    protected $fillable = [
        'courseName','conDate','duration','lecturer','organisation','location','lecturer_id'
    ];

    public function getLecturers() {

        $lastName = DB::table('lecturers')
            ->leftJoin('courses', 'id', '=', 'lecturer_id')
            ->get();
        return $lastName;


    }


    public function lecturer() {
        $this->hasMany('App\Course');
    }
}
