@extends('layouts.app')

@section('content')
        <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body>
<h1 style= " text-align: center" >Genres</h1>

<br>
<div align="center">
<form  style="width: 50%"  action="{{action("SearchController@searchGenres")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="search"
               placeholder="Search a genre"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
    </div>
</form>
</div>
<br>

<table style="width: 90%"  align="center" class="table table-bordered table-hover">
    <thead>
    <tr>

        <th>Genre Name</th>
        <th>Description</th>
        <th colspan="4">Actions</th>

    </tr>
    </thead>
    <tbody>
    @foreach($allGenres as $key => $value)
        <tr>

            <td>{{$value->GenreName}}</td>
            <td>{{$value->Description}}</td>


            <td>
                <a class="btn btn-primary btn-red" href="{{ route('genres.show', $value->id) }}" method="POST">Show</a>
            </td>
            @if (Auth::check())
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('genres/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('GenreController@destroy', $value->id )}}" method="post">
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
@if (Auth::check())
    <div class="form-group row">
        <div class="col-md-1"></div>
        <a class="btn btn-small btn-info" href="{{ URL::to('genres/create') }}">Create a Genre</a>
        @endif
        <div class="col-md-8"></div>

        <a class="btn btn-small btn-info" href="{{ URL::to('http://localhost/') }}">Back</a>
    </div>
</body>
</html>
@endsection