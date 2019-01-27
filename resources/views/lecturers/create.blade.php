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
    <form method="post" action="{{url('/lecturers')}}">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="firstName" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="firstName">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="lastName" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Enter name:" name="lastName">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="Organisation" class="col-sm-2 col-form-label col-form-label-lg">Organisation</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Enter organisation:" name="organisation">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary">
            <div class="col-xl-1"></div>
            <a class="btn btn-primary" href="{{ route('lecturers.index') }}"> Back</a>
        </div>
    </form>
</div>
@endsection


