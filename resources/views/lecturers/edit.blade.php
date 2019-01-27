@extends('layouts.app')
@section('content')
<h1>Edit form</h1>
<div class="panel-body">

    <form method="post" action="{{action('LecturerController@update', $id)}}">

            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group row">
                {{csrf_field()}}
                <label for="firstName" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="firstName" value="{{$lecturer -> firstName}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label for="lastName" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Enter name:" name="lastName" value="{{$lecturer -> lastName}}">
                </div>
            </div>
            <div class="form-group row">
                {{csrf_field()}}
                <label for="Organisation" class="col-sm-2 col-form-label col-form-label-lg">Organisation</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput5" placeholder="Enter organisation:" name="organisation" value="{{$lecturer -> organisation}}">
                </div>
            </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-secondary">Update</button>
        </div>
    </form>
</div>

@endsection


