<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImageUpload;
use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageModel = new Images();
        $allImages = $imageModel::all();
        return view('images.index')->with('images' , $allImages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageUpload $request)
    {
        $path = $request->file('customImage')->store('public/course-images');

        $image = new Images([
            'fileName' => basename($path),
            'imageDescription' => $request->get('imageDescription')
        ]);
        $image->save();

        return redirect('images')->with('success', 'Image was uploaded successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Images::find($id);
        Storage::delete('public/course-images/' . $image->fileName);
        $image->delete();

        return redirect('images')->with('delete', 'Image was deleted');
    }
}
