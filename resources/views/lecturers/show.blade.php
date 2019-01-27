@extends('layouts.app')
      @section('content')
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Courses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lecturers.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
       <td width="20%">
            <strong>Lecturer's first name:</strong>
       </td>
        <td>
            {{ $lecturer->firstName }}
        </td>
    </tr>
    <tr>
        <td width="25%">
            <strong>Lecturer's second name:</strong>
        </td>
        <td>
            {{ $lecturer->lastName }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Organisation name:</strong>
        </td>
        <td>
            {{ $lecturer->organisation }}
        </td>
    </tr>
</table>
@endsection

