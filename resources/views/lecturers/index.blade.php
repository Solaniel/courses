@extends('layouts.app')
        @section('content')
<h1>INDEX</h1>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('lecturers/create') }}">Add a lecturer</a>
</div>
<br>
<form action="{{action("SearchController@searchLecturers")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
               placeholder="Search a lecturer by first name or a last name"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
<br>
<table class="table table-bordered">
    <thead  style="background-color: #efebb1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Organisation</th>
        <th colspan="3" style="text-align: center">Actions</th>
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
            @if(!Auth::guest())
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
                @endif
        </tr>
        @endforeach
    </tbody>
</table>
            {{$lecturers->links()}}
@endsection

