@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Edit Lesson</h1>

<form action="{{ route('lessons.update', $lesson->id) }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Lesson Topic</label>
                    <input type="text" class="form-control" name="lesson_topic" value="{{ $lesson['lesson_topic'] }}" required>
                </div>                
                <div class="form-group">
                    <label for="">Lesson Level</label>
                    <input type="text" class="form-control" name="lesson_level" value="{{ $lesson['lesson_level'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Lesson Description</label>
                    <input id="lesson_description" type="hidden" class="form-control" name="lesson_description" value="{{ $lesson['lesson_description'] }}" required>
                    <trix-editor input="lesson_description"></trix-editor>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                    <a href="{{ URL('/lessons') }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
        </div>        
    </div>
</form>

@endsection