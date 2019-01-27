@extends('layouts.app')
  @section('content')
<h1>INDEX</h1>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('locations/create') }}">Add a location</a>
</div>
<table class="table table-bordered">
    <thead  style="background-color: #efebb1">
    <tr>
        <th>ID</th>
        <th>Location Name</th>
        <th>Description</th>
        <th colspan="3" style="text-align: center">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($locations as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->locationName}}</td>
            <td>{{$value->locationDescription}}</td>
            <td>
                <a class="btn btn-primary btn-red" href="{{ route('locations.show', $value->id) }}" method="POST">Show</a>
            </td>
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('locations/' . $value->id . '/edit') }}">Edit location</a>
            </td>

            <td>
                <form action="{{action('LocationController@destroy', $value->id )}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

