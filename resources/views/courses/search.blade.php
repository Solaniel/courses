@extends('layouts.app')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .links > a {
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>
</head>
<body>


<div class="container">
    @if(isset($details))
    <p style="font-size: 25px;" class="text-center"> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Course Details</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Course Name</th>
            <th>Conduction Date</th>
            <th>Lecturer</th>
            <th>Organisation</th>
            <th>Location</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $courses)
            <tr>
                <td>{{$courses->courseName}}</td>
                <td>{{$courses->condate}}</td>
                <td>{{$courses->lecturer}}</td>
                <td>{{$courses->organisation}}</td>
                <td>{{$courses->location}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@elseif(isset($message))
    <h1>{{$message}}</h1>
@endif

<div class="form-group row">
    <div class="col-xl-1"></div>
    <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
</div>
</body>
</html>
