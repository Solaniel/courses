@extends('layouts.app')
        @section('content')
<h1>Creation form</h1>
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
    <form method="post" action="{{url('/courses')}}">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Course" class="col-sm-2 col-form-label col-form-label-lg">Course</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Course" name="courseName">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Date" class="col-sm-2 col-form-label col-form-label-lg">Date</label>
            <div class="col-sm-10">
                <input type="date" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Date" name="conDate">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Duration" class="col-sm-2 col-form-label col-form-label-lg">Duration</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput3" placeholder="Duration" name="duration">
            </div>
        </div>
       <!-- <div class="form-group row">

            <label for="Lecturer" class="col-sm-2 col-form-label col-form-label-lg">Lecturer</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput4" placeholder="Lecturer" name="lecturer">
            </div>
        </div> -->
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Lecturer" class="col-sm-2 col-form-label col-form-label-lg">Lecturer</label>
            <div class="col-sm-10">
        <?php if (!empty($allcourses)):?>
        <select name="lecturer_id" class="form-control">
            <?php foreach($allcourses as $key => $value):?>
            <option name="lecturer" value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php endforeach; ?>
        </select>
        <?php endif; ?>
            </div>
        </div>

        <div class="form-group row">
            {{csrf_field()}}
            <label for="Organisation" class="col-sm-2 col-form-label col-form-label-lg">Organisation</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Organisation" name="organisation">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Location" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput6" placeholder="Location" name="location">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary">
            <div class="col-xl-1"></div>
            <a class="btn btn-primary" href="{{ route('courses.index') }}"> Back</a>
        </div>
    </form>
</div>

@endsection

