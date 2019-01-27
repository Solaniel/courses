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
        $lecturers = DB::table('lecturers')
            ->where('id', '=' ,'courses.lecturer_id')
            ->select('firstName');

        return $lecturers->implode('firstName' );
    }


    public function lecturer() {
        $this->hasMany('App\Lecturer');
    }
}
