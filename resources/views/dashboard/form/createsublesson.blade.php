@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Create Sublesson</h1>

<form action="{{ route('sublesson.store') }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Lesson ID</label>
                    <select name="lesson_id" id="" class="form-control" required>
                        @foreach ($lessons as $lesson)
                            <option value="{{ $lesson->id }}">{{ $lesson->lesson_topic }}</option>
                        @endforeach
                    </select>
                </div>  
                <div class="form-group">
                    <label for="">SubLesson Topic</label>
                    <input type="text" class="form-control" name="sublesson_topic" required>
                </div>                
                <div class="form-group">
                    <label for="">SubLesson Description</label>
                    <input type="text" class="form-control" name="sublesson_description" required>
                </div>
                <div class="form-group">
                    <label for="">SubLesson Image</label>
                    <input type="file" class="form-control" name="sublesson_image" required>
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