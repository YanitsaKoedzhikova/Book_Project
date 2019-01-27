@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style= " text-align: center" >Images for the games we love</h1>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
                        @if (\Session::has('success'))
                            <div class="alert alert-info">{{\Session::get('success') }}</div>
                        @endif

                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <td >Name</td>
                                <td>Image</td>
                                <th colspan="4">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $key => $value)
                                <tr>

                                    <td>{{ $value->imageDescription }}</td>
                                    <td><img src="<?php echo asset('storage/sample-image/' . $value->fileName);?>" alt="image" /></td>
                                    <!-- we will also add show, edit, and delete buttons -->

                                    <td>
                                        <a class="btn btn-primary btn-red" href="{{ route('images.show', $value->id) }}" method="POST">Show</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-small btn-info" href="{{ URL::to('images/' . $value->id . '/edit') }}">Edit</a>
                                    </td>

                                    <td>

                                        <form action="{{action('ImageController@destroy', $value->id )}}" method="post">
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
                            <a class="btn btn-small btn-info" href="{{ URL::to('images/create') }}" >Add Image</a>
                        </div>
                    </div>

                        <div class="panel-heading">
                            <div class="col-md-2"></div>
                            <a class="btn btn-small btn-info" href="{{ URL::to('http://localhost/') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection