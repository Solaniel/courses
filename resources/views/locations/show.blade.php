@extends('layouts.app')
@section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Locations</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('locations.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
       <td width="20%">
            <strong>Locations's name:</strong>
       </td>
        <td>
            {{ $location->locationName }}
        </td>
    </tr>
    <tr>
        <td width="25%">
            <strong>Description</strong>
        </td>
        <td>
            {{ $location->locationDescription }}
        </td>
    </tr>
</table>
@endsection


