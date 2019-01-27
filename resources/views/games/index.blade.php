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
<h1 style= " text-align: center" >The games we love</h1>

<br>
<form action="{{action("SearchController@searchGames")}}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="search"
               placeholder="Search a game"> <span class="input-group-btn">
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

        <th>GameName</th>
        <th>ReleaseDate</th>
        <th>Creator</th>
        <th>Genre</th>
        <th>Description</th>
        <th colspan="4">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($allGames as $key => $value)
        <tr>

            <td>{{$value->GameName}}</td>
            <td>{{$value->ReleaseDate}}</td>
            <td>{{$value->Creator}}</td>
            <td>{{$value->Genre}}</td>
            <td>{{$value->Description}}</td>
            <td>
                <a class="btn btn-primary btn-red" href="{{ route('games.show', $value->id) }}" method="POST">Show</a>
            </td>
            @if (Auth::check())
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('games/' . $value->id . '/edit') }}">Edit</a>
            </td>
            <td>
                <form action="{{action('GameController@destroy', $value->id )}}" method="post">
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
<div class="panel-heading">
    <a class="btn btn-small btn-info" href="{{ URL::to('games/create') }}">Create a Game</a>
    <div class="col-md-2"></div>
    @endif
    <a class="btn btn-small btn-info" href="{{ URL::to('http://localhost/') }}">Back</a>
</div>

</body>
</html>
@endsection


