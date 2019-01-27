@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

</head>
<body>
@section('content')
<h1>Edit</h1>
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
    <form method="post" action="{{action('GenreController@update' , $id)}}">
        <div class="form-group row">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <label for="firstName" class="col-sm-2 col-form-label col-form-label-lg">Genre Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" name="GenreName" value="{{$genre->GenreName}}">
            </div>
        </div>
        <div class="form-group row">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="PATCH">
            <label for="firstName" class="col-sm-2 col-form-label col-form-label-lg">Description:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput1" name="Description" value="{{$genre->Description}}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-small btn-info">Update</button>
            <a class="btn btn-primary" href="{{ route('genres.index') }}"> Back</a>
        </div>
    </form>
</div>

</body>
</html>
@endsection