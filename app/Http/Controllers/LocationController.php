<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
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
        $locationModel = new Location();
        $alllocations = $locationModel::orderBy('locationName','asc')->paginate(5);
        return view('locations.index')->with('locations' , $alllocations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
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
            'locationName' => 'required|min:2|max:128',
            'locationDescription' => 'required|min:2|max:128',

        );

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect('locations/create')->WithErrors($validator);
        } else {
            $location = new Location([
                'locationName' => $request->get('locationName'),
                'locationDescription' => $request->get('locationDescription')
            ]);

            $location->save();

            return redirect('locations');

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
        $location = Location::find($id);

        return view('locations.show',compact('location','id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);

        return view('locations.edit',compact('location','id'));
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
        $location = Location::find($id);

        $location->locationName = $request->get('locationName');
        $location->locationDescription = $request->get('locationDescription');

        $location->save();

        return redirect('locations')->with('success', 'Task was successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();

        return redirect('locations')->with('success','Location has been removed');
    }
}
