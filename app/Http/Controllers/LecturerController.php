<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Lecturer;
use Illuminate\Support\Facades\Validator;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lecturerModel = new Lecturer();
        $allLecturers = $lecturerModel::all();

        return view('lecturers.index')->with('lecturers',$allLecturers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecturers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=array(
            'firstName' => 'required|min:2|max:50',
            'lastName' => 'required|min:2|max:80',
            'organisation' => 'required|min:2|max:90'
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect('lecturers/create')->WithErrors($validator);
        } else {
            $lecturer = new Lecturer([
                'firstName' => $request->get('firstName'),
                'lastName' => $request->get('lastName'),
                'organisation' => $request->get('organisation')
            ]);

            $lecturer->save();

            return redirect('lecturers');

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
        $lecturer = Lecturer::find($id);

        return view('lecturers.show',compact('lecturer','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lecturer = Lecturer::find($id);

        return view('lecturers.edit',compact('lecturer','id'));
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
        $lecturer = Lecturer::find($id);

        $lecturer->firstName = $request->get('firstName');
        $lecturer->lastName = $request->get('lastName');
        $lecturer->organisation = $request->get('organisation');

        $lecturer->save();

        return redirect('lecturers')->with('success', 'Task was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lecturer = Lecturer::find($id);
        $lecturer->delete();

        return redirect('lecturers')->with('success','Lecturer has been removed');
    }
}
