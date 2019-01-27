@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>File Uploading in Laravel</title>
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

<body>
<br />

<div class="container">
    <h3 align="center">File Uploading in Laravel</h3>
    <br />
    <!--<table class="table table-hover table-bordered">
             <thead class="thead-dark">
                <tr>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table> -->

    @foreach($images as $key => $value)
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
            <img src="<?php echo asset('storage/course-images/' . $value->fileName);?>" alt="image" class="img-responsive">
        </div>

    @endforeach

    <div class="panel-heading">
        <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}">Add an image</a>
    </div>
    <br />
</div>
</body>
</html>