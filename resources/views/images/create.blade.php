@extends('layouts.app')
        @section('content')

<div class="container">
    <h3 align="center">File Upload</h3>
    <br />
    <form method="post" action="{{url('images')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <table class="table">
                <tr>
                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                    <td width="30"><input type="file" name="customImage" /></td>
                    <td width="30%" align="left"><input type="submit" class="btn btn-primary" value="Upload"></td>
                </tr>
                <tr>
                    <td width="40%" align="right"></td>
                    <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                    <td width="30%" align="left"></td>
                </tr>
                <tr>
                    <td width="40%" align="right"><label>Add a description</label></td>
                    <td width="30"><input type="text" name="imageDescription" /></td>
                    <td width="30%" align="left"></td>
                </tr>
            </table>
        </div>
    </form>
    <br />
</div>

@endsection