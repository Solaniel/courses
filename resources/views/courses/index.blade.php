@extends('layouts.app')
        @section('content')
            <?php use App\Course;
?>
<h1>INDEX</h1>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('courses/create') }}">Create a Course</a>
</div>
<br>
<form action="{{action("SearchController@searchCourses")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
               placeholder="Search by user or a date"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
<br>
<table class="table table-bordered">
    <thead style="background-color: #efebb1">
    <tr>
        <th>ID</th>
        <th>Course</th>
        <th>Date</th>
        <th>Duration</th>
        <th>Lecturer</th>
        <th>Organisation</th>
        <th>Location</th>
        <th colspan="3" style="text-align: center">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($courses as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->courseName}}</td>
            <td>{{$value->conDate}}</td>
            <td>{{$value->duration}} minutes</td>
            <td>{{$value->lecturer}}</td>
            <td>{{$value->organisation}}</td>
            <td>{{$value->location}}</td>

            <td>
                <a class="btn btn-primary btn-red" href="{{ route('courses.show', $value->id) }}" method="POST">Show</a>
            </td>
            @if(!Auth::guest())
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('courses/' . $value->id . '/edit') }}">Edit subject</a>
            </td>

            <td>
                <form action="{{action('CourseController@destroy', $value->id )}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
            {{$courses->links()}}
@endsection


