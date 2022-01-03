@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Edit SubLesson Detail</h1>

<form action="{{ route('sublesson.update', $sublesson->id) }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Lesson ID</label>
                    <input type="text" class="form-control" name="lesson_id" value="{{ $sublesson['lesson_id'] }}" required>
                </div>  
                <div class="form-group">
                    <label for="">SubLesson Topic</label>
                    <input type="text" class="form-control" name="sublesson_topic" value="{{ $sublesson['sublesson_topic'] }}" required>
                </div>                
                <div class="form-group">
                    <label for="">SubLesson Description</label>
                    <input id="sublesson_description" type="hidden" class="form-control" name="sublesson_description" value="{{ $sublesson['sublesson_description'] }}"required>
                    <trix-editor input="sublesson_description"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="">SubLesson Image</label>
                    <input type="hidden" name="oldImage" value="{{ $sublesson->sublesson_image }}">
                    <input type="file" class="form-control" name="sublesson_image">
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                    <a href="{{ URL::previous() }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
        </div>        
    </div>
</form>

@endsection