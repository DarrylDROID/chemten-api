@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Edit Exercise {{ $exercise->lesson->lesson_topic }}</h1>

<form action="{{ route('exercises.update', $exercise->id) }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Exercise Image</label>
                    <input type="hidden" name="oldImage" value="{{ $exercise->exercise_image }}">
                    <input type="file" class="form-control" name="exercise_image">
                </div>
                <div class="form-group">
                    <label for="">Exercise Description</label>
                    <input type="text" class="form-control" name="exercise_description" value="{{  $exercise['exercise_description'] }}" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                    <a href="{{ URL('/exercises') }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
        </div>        
    </div>
</form>

@endsection