@extends('layouts.app')

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Course</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .gallery-title
        {
            font-size: 36px;
            color: #42B32F;
            text-align: center;
            font-weight: 500;
            margin-bottom: 70px;
        }
        .gallery-title:after {
            content: "";
            position: absolute;
            width: 7.5%;
            left: 46.5%;
            height: 45px;
            border-bottom: 1px solid #5e5e5e;
        }
        .filter-button
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #42B32F;
            margin-bottom: 30px;
        }
        .filter-button:hover
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            background-color: #42B32F;
        }
        .btn-default:active .filter-button:active
        {
            background-color: #42B32F;
            color: white;
        }
        .port-image
        {
            width: 100%;
        }
        .gallery_product
        {
            margin-bottom: 30px;
        }
    </style>
</head>


@section('content')
<div class="container">
    <div class="panel-heading">
        <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}">Add an image</a>
    </div>
    <table class="table table-hover table-responsive">

    @foreach($images as $key => $value)
            <tr>
            <td>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
              <img src="<?php echo asset('storage/course-images/' . $value->fileName);?>" alt="image" class="img-responsive">
             </div>
            </td>
            <td>
              {{$value->imageDescription}}
         </td>
            <td>
               <form action="{{action('ImagesController@destroy', $value->id )}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
             </td>
            </tr>
    @endforeach
    </table>
    <br />
</div>

@endsection