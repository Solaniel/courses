@extends('layouts.app')
        @section('content')

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
    <form method="post" action="{{action('CourseController@update', $id)}}">
        <div class="form-group row">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <label for="Course" class="col-sm-2 col-form-label col-form-label-lg">Course</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Course" name="courseName" value="{{$course->courseName}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Date" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Date" name="conDate" value="{{$course->conDate}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Duration" class="col-sm-2 col-form-label col-form-label-lg">Duration</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput3" placeholder="Duration" name="duration" value="{{$course->duration}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Lecturer" class="col-sm-2 col-form-label col-form-label-lg">Lecturer</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Lecturer" name="lecturer" value="{{$course->lecturer}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Organisation" class="col-sm-2 col-form-label col-form-label-lg">Organisation</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Organisation" name="organisation" value="{{$course->organisation}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Location" name="location" value="{{$course->location}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-secondary">Update</button>
        </div>
    </form>
</div>

@endsection


