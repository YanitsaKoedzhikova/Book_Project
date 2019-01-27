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
<div class="container">
    @if(isset($details))
        <p style="font-size: 25px; text-align: center;"> All creator with name  <b> {{ $query }} </b> are :</p>
        <h2>Creators</h2>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Creator Name</th>
                <th>Creating Company</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $creator)
                <tr>
                    <td>{{$creator->CreatorName}}</td>
                    <td>{{$creator->CreatingCompany}}</td>
                    <td>{{$creator->Description}}</td>

                </tr>

            @endforeach
            </tbody>
        </table>
</div>
@elseif(isset($message))
    <h1 style= " text-align: center">{{$message}}</h1>
    <form action="{{action("SearchController@searchCreators")}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="search"
                   placeholder="Search a creator"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Search</span>
            </button>
        </span>
        </div>
    </form>
@endif
<div class="form-group row">
    <div class="col-xl-1"></div>
    <a class="btn btn-primary" href="{{ route('creators.index') }}"> Back</a>
</div>
</body>
</html>
@endsection