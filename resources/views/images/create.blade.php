@extends('layouts.app')
        <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>File Uploading in Laravel</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br />

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
</body>
</html>