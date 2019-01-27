@extends('layouts.app')
      @section('content')
<h1>INDEX</h1>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('organisations/create') }}">Add an organisation</a>
</div>
<br>
<form action="{{action("SearchController@searchOrganisations")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
               placeholder="Search a lecturer by first name or a last name"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
<br>
<table class="table table-bordered">
    <thead  style="background-color: #efebb1">
    <tr>
        <th>ID</th>
        <th>Organisation Name</th>
        <th>Description</th>
        <th colspan="3" style="text-align: center">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($organisations as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->organisationName}}</td>
            <td>{{$value->description}}</td>
            <td>
                <a class="btn btn-primary btn-red" href="{{ route('organisations.show', $value->id) }}" method="POST">Show</a>
            </td>
            @if(!Auth::guest())
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('organisations/' . $value->id . '/edit') }}">Edit organisation</a>
            </td>

            <td>
                <form action="{{action('OrganisationController@destroy', $value->id )}}" method="post">
                {{csrf_field()}}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
                @endif
        </tr>
        @endforeach
    </tbody>
</table>
          {{$organisations->links()}}
@endsection

