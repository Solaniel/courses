@extends('layouts.app')
        @section('content')
<div class="container">
    <div class="panel-heading">
        <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}">Add an image</a>
    </div>
    @foreach($images as $key => $value)
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
            <img src="<?php echo asset('storage/course-images/' . $value->fileName);?>" alt="image" class="img-responsive">
        </div>

    @endforeach


    <br />
</div>
@endsection