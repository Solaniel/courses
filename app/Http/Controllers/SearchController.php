<?php

namespace App\Http\Controllers;

use App\Lecturer;
use App\Organisation;
use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Input;
class SearchController extends Controller
{
    public function searchCourses(){
        $q = Input::get ( 'q' );
        $course = Course::where('courseName','LIKE','%'.$q.'%')->orWhere('conDate','LIKE','%'.$q.'%')->get();
        if(count($course) > 0)
            return view('courses.search')->withDetails($course)->withQuery ( $q );
        else return view('courses.search')->withMessage('No Details found. Try to search again !');
    }
    
    public function searchLecturers() {
        $q = Input::get('q');
        $lecturer = Lecturer::where('firstName', 'LIKE','%'.$q.'%')->orWhere('lastName','LIKE','%'.$q.'%')->get();
        if(count($lecturer) > 0)
            return view('lecturers.search')->withDetails($lecturer)->withQuery ( $q );
        else return view('lecturers.search')->withMessage('No Details found. Try to search again !');

    }

    public function searchOrganisations() {
        $q = Input::get('q');
        $organisation = Organisation::where('organisationName', 'LIKE','%'.$q.'%')->get();
        if(count($organisation) > 0)
            return view('organisations.search')->withDetails($organisation)->withQuery ( $q );
        else return view('organisations.search')->withMessage('No Details found. Try to search again !');

    }
}
