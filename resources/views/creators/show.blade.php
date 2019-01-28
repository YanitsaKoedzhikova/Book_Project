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
<h1>Creator</h1>

<table class="table table-bordered table-hover" style="width: 70%">
    <tr>
        <td width="20%">
            <strong>Creator name:</strong>
        </td>
        <td>
            {{ $creator->CreatorName }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Creating Company:</strong>
        </td>
        <td>
            {{ $creator->CreatingCompany }}
        </td>
    </tr>
    <tr>
        <td width="20%">
            <strong>Description:</strong>
        </td>
        <td>
            {{ $creator->Description }}
        </td>
    </tr>

</table>
<div class="panel-body">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('creators.index') }}"> Back</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection