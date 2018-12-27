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
<h1>Edit form</h1>
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
    <form method="post" action="{{action('LecturerController@update', $id)}}">

            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="firstName" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="firstName" value="{{$lecturer -> firstName}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lastName" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Enter name:" name="lastName" value="{{$lecturer -> lastName}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label for="Organisation" class="col-sm-2 col-form-label col-form-label-lg">Organisation</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Enter organisation:" name="organisation" value="{{$lecturer -> organisation}}">
                </div>
            </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn-outline-dark">Update</button>
        </div>
    </form>
</div>
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


