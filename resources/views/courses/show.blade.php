@extends('layouts.app')
 @section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Courses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
       <td width="20%">
            <strong>Course name:</strong>
       </td>
        <td>
            {{ $course->courseName }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Conduction date:</strong>
        </td>
        <td>
            {{ $course->conDate }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Course duration:</strong>
        </td>
        <td>
            {{ $course->duration }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Lecturer's name:</strong>
        </td>
        <td>
            {{ $course->lecturer }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Organisation name:</strong>
        </td>
        <td>
            {{ $course->organisation }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Course location:</strong>
        </td>
        <td>
            {{ $course->location }}
        </td>
    </tr>
</table>
@endsection

