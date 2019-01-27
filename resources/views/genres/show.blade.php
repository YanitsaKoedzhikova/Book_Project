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
<h1>Genre</h1>

<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
        <td width="20%">
            <strong>Genre name:</strong>
        </td>
        <td>
            {{ $genre->GenreName }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Description:</strong>
        </td>
        <td>
            {{ $genre->Description}}
        </td>
    </tr>
</table>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('genres.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection