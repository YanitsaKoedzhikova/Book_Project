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

    <!-- Styles -->
    <style>
        html, body {
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }


        .links > a {
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
<h1 style= " text-align: center" >Genres</h1>

<br>
<form action="{{action("SearchController@searchGenres")}}" method="POST" role="search">
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
<br>

<table class="table table-bordered table-hover">
    <thead class="thead-dark">
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

        </tr>
    @endforeach
    </tbody>
</table>
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('genres/create') }}">Create a Genre</a>
    <div class="col-md-2"></div>
    <a class="btn btn-small btn-info" href="{{ URL::to('http://localhost/') }}">Back</a>
</div>
</body>
</html>
@endsection