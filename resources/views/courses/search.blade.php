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


<div class="container">
    @if(isset($details))
    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Course Details</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Course Name</th>
            <th>Conduction Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $courses)
            <tr>
                <td>{{$courses->courseName}}</td>
                <td>{{$courses->condate}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@elseif(isset($message))
    <h1>{{$message}}</h1>
@endif
</body>
</html>
