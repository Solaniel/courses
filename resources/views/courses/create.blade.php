@extends('layouts.app')
        @section('content')
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
<div class="top-right">
    @if (Route::has('login'))
        <div class="">
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
<nav class="btn btn-light links">
    <a href="{{ url('/') }}">Home</a>
    <a href="/courses">Courses</a>
    <a href="/lecturers">Lecturers</a>
    <a href="/organisations">Organisations</a>
    <a href="/locations">Locations</a>
</nav>
<h1>Creation form</h1>
<div class="panel-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{url('/courses')}}">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Course" class="col-sm-2 col-form-label col-form-label-lg">Course</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Course" name="courseName">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Date" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Date" name="conDate">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Duration" class="col-sm-2 col-form-label col-form-label-lg">Duration</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput3" placeholder="Duration" name="duration">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Lecturer" class="col-sm-2 col-form-label col-form-label-lg">Lecturer</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput4" placeholder="Lecturer" name="lecturer">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Organisation" class="col-sm-2 col-form-label col-form-label-lg">Organisation</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Organisation" name="organisation">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Location" name="location">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary">
            <div class="col-xl-1"></div>
            <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
        </div>
    </form>
</div>


</body>
</html>
@endsection

