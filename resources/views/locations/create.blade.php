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
    <form method="post" action="{{url('/locations')}}">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="locationName" class="col-sm-2 col-form-label col-form-label-lg">Location Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="locationName">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="description" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Enter description:" name="locationDescription">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary">
            <div class="col-xl-1"></div>
            <a class="btn btn-primary" href="{{ route('locations.index') }}"> Back</a>
        </div>
    </form>
</div>
@endsection

