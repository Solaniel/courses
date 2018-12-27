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
<nav class="btn btn-light links">
    <a href="{{ url('/') }}">Home</a>
    <a href="/courses">Courses</a>
    <a href="/lecturers">Lecturers</a>
    <a href="/organisations">Organisations</a>
    <a href="/locations">Locations</a>
</nav>

<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Courses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lecturers.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
       <td width="20%">
            <strong>Lecturer's first name:</strong>
       </td>
        <td>
            {{ $lecturer->firstName }}
        </td>
    </tr>
    <tr>
        <td width="25%">
            <strong>Lecturer's second name:</strong>
        </td>
        <td>
            {{ $lecturer->lastName }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Organisation name:</strong>
        </td>
        <td>
            {{ $lecturer->organisation }}
        </td>
    </tr>
</table>
</body>
</html>


