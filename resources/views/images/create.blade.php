@extends('layouts.app')

@section('content')

    <form method="post" action="{{url('images')}}" enctype="multipart/form-data">

        <div class="form-group row">
            {{csrf_field()}}

            <label for="imageDescription" class="col-sm-2 col-form-label col-form-label-lg">Image name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" id="lgFormGroupInput"
                       placeholder="imageDescription" name="imageDescription">
            </div>
        </div>
        <div class="form-group row">
            <label for="customImage" class="col-sm-2 col-form-label col-form-label-lg">Choose file</label>
            <div class="col-sm-10">
                <input type="file" class="form-control form-control-lg" id="customImage"
                       placeholder="customImage" name="customImage">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" class="btn btn-primary">

        <div class="col-xl-1"></div>
        <a class="btn btn-primary" href="{{ route('images.index') }}"> Back</a>
        </div>

    </form>
@endsection