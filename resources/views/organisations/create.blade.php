@extends('layouts.app')
@section('content')
<h1>Creation form</h1>
<div class="panel-body">
    <form method="post" action="{{url('/organisations')}}">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="organisationName" class="col-sm-2 col-form-label col-form-label-lg">Organisation Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="organisationName">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="description" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Enter description:" name="description">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary">
            <div class="col-xl-1"></div>
            <a class="btn btn-primary" href="{{ route('organisations.index') }}"> Back</a>
        </div>
    </form>
</div>
@endsection
