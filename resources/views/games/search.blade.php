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
<div class="container">
    @if(isset($details))
        <p style="font-size: 25px; text-align: center;"> All games with name <b> {{ $query }} </b> are :</p>
        <h2>Games</h2>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Game Name</th>
                <th>Release Date</th>
                <th>Creator</th>
                <th>Genre</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $game)
                <tr>
                    <td>{{$game->GameName}}</td>
                    <td>{{$game->ReleaseDate}}</td>
                    <td>{{$game->Creator}}</td>
                    <td>{{$game->Genre}}</td>
                    <th>{{$game->Descriptio}}</th>

                </tr>

            @endforeach
            </tbody>
        </table>
</div>
@elseif(isset($message))
    <h1 style= " text-align: center" >{{$message}}</h1>
    <div align="center">
        <form   style="width: 50%" action="{{action("SearchController@searchGames")}}" method="POST" role="search">
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
    </div>
@endif
<div  class="form-group row">
    <div class="col-xl-1"></div>
    <a class="btn btn-primary" href="{{ route('games.index') }}"> Back</a>
</div>
</body>
</html>
@endsection