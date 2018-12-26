<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Course;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseModel = new Course();
        $allcourses = $courseModel::all();
        return view('courses.index')->with('courses' , $allcourses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
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
            'courseName' => 'bail||required|max:255',
            'conDate' => 'required',
            'duration' => 'required',
            'lecturer' => 'required|max:128',
            'organisation' => 'required|max:128',
            'location' => 'required|max:128',
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
                'organisation' => $request->get('organisation'),
                'location' => $request->get('location'),
            ]);

            $course->save();
            return redirect('courses');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses.edit', compact('course','id'));
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
        return redirect('courses')->with('success', 'Task was successful!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
