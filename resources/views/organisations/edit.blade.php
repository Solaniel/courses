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
    <form method="post" action="{{action('OrganisationController@update', $id)}}">

            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
        <div class="form-group row">
            {{csrf_field()}}
            <label for="organisationName" class="col-sm-2 col-form-label col-form-label-lg">Organisation Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" placeholder="Enter name:" name="organisationName" value="{{$organisation -> organisationName}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <label for="description" class="col-sm-2 col-form-label col-form-label-lg">Description</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput2" placeholder="Enter description:" name="description" value="{{$organisation -> description}}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-secondary">Update</button>
        </div>
    </form>
</div>
@endsection

