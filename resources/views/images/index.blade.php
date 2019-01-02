@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>File Uploading in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br />

<div class="container">
    <h3 align="center">File Uploading in Laravel</h3>
    <br />
    <table class="table table-hover table-bordered">
             <thead class="thead-dark">
                <tr>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                @foreach($images as $key => $value)
                    <tr>
                        <td><img src="<?php echo asset('storage/course-images/' . $value->fileName);?>" alt="image"></td>
                    </tr>

                @endforeach
                </tbody>
            </table>

    <div class="panel-heading">
        <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}">Add an image</a>
    </div>
    <br />
</div>
</body>
</html>