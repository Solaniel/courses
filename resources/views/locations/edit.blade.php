@extends('layouts.app')
      @section('content')
<h1>Edit form</h1>
<div class="panel-body">
    <form method="post" action="{{action('LocationController@update', $id)}}">

            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="locationName" class="col-sm-2 col-form-label col-form-label-lg">Location Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="locationName" value="{{$location->locationName}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="description" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Enter description:" name="locationDescription" value="{{$location->locationDescription}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-secondary">Update</button>
        </div>
    </form>
</div>
@endsection
