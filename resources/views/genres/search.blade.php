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
        <p style="font-size: 25px; text-align: center;"> This are <b> {{ $query }} </b> genres :</p>
        <h2>Genres</h2>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Genre Name</th>
                <th>Description</th>

            </tr>
            </thead>
            <tbody>
            @foreach($details as $genre)
                <tr>
                    <td>{{$genre->GenreName}}</td>
                    <td>{{$genre->Description}}</td>


                </tr>

            @endforeach
            </tbody>
        </table>
</div>
@elseif(isset($message))
    <h1 style= " text-align: center">{{$message}}</h1>
    <div align="center">
    <form  style="width: 50%" action="{{action("SearchController@searchGenres")}}" method="POST" role="search">
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
@endif
<div class="form-group row">
    <div class="col-xl-1"></div>
    <a class="btn btn-primary" href="{{ route('genres.index') }}"> Back</a>
</div>
</body>
</html>
@endsection