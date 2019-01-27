<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Course;
use App\Lecturer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturer = new Lecturer();
        $courseModel = new Course();

        $lecturers = $courseModel->getLecturers();

        $allcourses = $courseModel::all();

        return view('courses.index', compact('lecturers'))->with('courses' , $allcourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courseModel = new Course();
        $lecturer = new Lecturer();

        $allcourses = $courseModel::all();//->pluck('firstName','id');
        $data = $lecturer->getSpecificSelectData();
        $allcourses = ['0' => 'Select Lecturer'] + $data;
        //if (Auth::user()->isAdmin()){
            return view('courses.create')->with('allcourses',$allcourses);
       // }
        //else {
         //   redirect('/');
       // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        $rules = array(
            'courseName' => 'bail|required|min:2|max:255',
            'conDate' => 'required',
            'duration' => 'required',
            'lecturer' => 'nullable',
            'lecturer_id' => 'required',
            'organisation' => 'required|min:2|max:128',
            'location' => 'required|min:1|max:128',
        );

        $validator = Validator::make($request->all(),$rules);
 
        if($validator->fails()) {
            return redirect('courses/create')->WithErrors($validator);
        } else {
            $course = new Course([
                'courseName' => $request->get('courseName'),
                'conDate' => $request->get('conDate'),
                'duration' => $request->get('duration'),
                'lecturer' => $request->get('lecturer'),
                'lecturer_id' => $request->get('lecturer_id'),
                'organisation' => $request->get('organisation'),
                'location' => $request->get('location'),
            ]);

            $course->save();
            return redirect('courses')->with('success', 'Task was successful');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);

        return view('courses.show',compact('course', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $lecturer = new Lecturer();
        $course = Course::find($id);

        $data = $lecturer->getSpecificSelectData();
        $allcourses = ['0' => 'Select Lecturer'] + $data;
        return view('courses.edit', compact('course','id'))->with('allcourses',$allcourses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->courseName = $request->get('courseName');
        $course->conDate = $request->get('conDate');
        $course->duration = $request->get('duration');
        $course->lecturer = $request->get('lecturer');
        $course->organisation = $request->get('organisation');
        $course->location = $request->get('location');
        $course->save();
        return redirect('courses')->with('update', 'Task was successful!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();

        return redirect('courses')->with('delete','Course has been deleted');
    }
}
