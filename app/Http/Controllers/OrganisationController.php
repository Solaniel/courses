<?php

namespace App\Http\Controllers;

use App\Organisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganisationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index' , 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisationModel = new Organisation();
        $allOrganisations = $organisationModel::orderBy('organisationName','asc')->paginate(5);

        return view('organisations.index')->with('organisations',$allOrganisations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisations.create');
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
            'organisationName' => 'required|min:2|max:50',
            'description' => 'required|min:2|max:255',
        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect('organisations/create')->WithErrors($validator);
        } else {
            $organisation = new Organisation([
                'organisationName' => $request->get('organisationName'),
                'description' => $request->get('description'),
            ]);

            $organisation->save();

            return redirect('organisations');

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
        $organisation = Organisation::find($id);

        return view('organisations.show',compact('organisation','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $organisation = Organisation::find($id);

        return view('organisations.edit',compact('organisation','id'));
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
        $organisation = Organisation::find($id);

        $organisation->organisationName = $request->get('organisationName');
        $organisation->description = $request->get('description');

        $organisation->save();

        return redirect('organisations')->with('success', 'Task was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organisation = Organisation::find($id);
        $organisation->delete();

        return redirect('organisations')->with('success','Organisation has been deleted');
    }
}
