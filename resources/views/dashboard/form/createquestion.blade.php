@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Create Question</h1>

<form action="{{ route('question.store') }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Exercise Topic</label>
                    <select name="exercise_id" id="" class="form-control" required>
                        @foreach ($exercises as $exercise)
                            <option value="{{ $exercise->id }}">{{ $exercise->lesson->lesson_topic }}</option>
                        @endforeach
                    </select>
                </div>                 
                <div class="form-group">
                    <label for="">Question Description</label>
                    <input type="text" class="form-control" name="question_description" required>
                </div>
                <div class="form-group">
                    <label for="">Qchoice1</label>
                    <input type="text" class="form-control" name="qchoice1" required>
                </div>
                <div class="form-group">
                    <label for="">Qchoice2</label>
                    <input type="text" class="form-control" name="qchoice2" required>
                </div>
                <div class="form-group">
                    <label for="">Qchoice3</label>
                    <input type="text" class="form-control" name="qchoice3" required>
                </div>
                <div class="form-group">
                    <label for="">Qchoice4</label>
                    <input type="text" class="form-control" name="qchoice4" required>
                </div>
                <div class="form-group">
                    <label for="">Correct Answer</label>
                    <input type="text" class="form-control" name="correctanswer" required>
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