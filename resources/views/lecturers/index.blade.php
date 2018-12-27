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

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
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

<nav class="btn btn-light links">
    <a href="{{ url('/') }}">Home</a>
    <a href="/courses">Courses</a>
    <a href="/lecturers">Lecturers</a>
    <a href="/organisations">Organisations</a>
    <a href="/locations">Locations</a>
</nav>
<h1>INDEX</h1>
<div class="panel-heading">
    Subjects
    <a class="btn btn-small btn-info" href="{{ URL::to('lecturers/create') }}">Add a lecturer</a>
</div>
<table class="table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Organisation</th>
        <th colspan="3">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($lecturers as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->firstName}}</td>
            <td>{{$value->lastName}}</td>
            <td>{{$value->organisation}}</td>
            <td>
                <a class="btn btn-primary btn-red" href="{{ route('lecturers.show', $value->id) }}" method="POST">Show</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('lecturers/' . $value->id . '/edit') }}">Edit lecturer</a>
            </td>

            <td>
                <form action="{{action('LecturerController@destroy', $value->id )}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif


</div>
</body>
</html>


