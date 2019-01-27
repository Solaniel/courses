@extends('layouts.app')
      @section('content')
<div class="container">
    @if(isset($details))
    <p style="font-size: 25px;" class="text-center"> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Course Details</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Organisation Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($details as $organisations)
            <tr>
                <td>{{$organisations->organisationName}}</td>
                <td>{{$organisations->description}}</td>
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
    <a class="btn btn-primary" href="{{ route('organisations.index') }}"> Back</a>
    </div>
@endsection