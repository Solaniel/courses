@extends('layouts.app')
    @section('content')
<div class="container">
    @if(isset($details))
    <p style="font-size: 25px;" class="text-center"> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Course Details</h2>
    <table class="table table-hover">
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
                <td>{{$courses->conDate}}</td>
                <td>{{$courses->lecturer_id}}</td>
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

@endsection
