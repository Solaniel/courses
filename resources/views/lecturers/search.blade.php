@extends('layouts.app')
@section('content')
<div class="container">
    @if(isset($details))
    <p style="font-size: 25px;" class="text-center"> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Lecturer Details</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Organisation</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $lecturers)
            <tr>
                <td>{{$lecturers->firstName}}</td>
                <td>{{$lecturers->lastName}}</td>
                <td>{{$lecturers->organisation}}</td>
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
    <a class="btn btn-primary" href="{{ route('lecturers.index') }}"> Back</a>
</div>
@endsection