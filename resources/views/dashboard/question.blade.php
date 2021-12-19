@extends('dashboard.layouts.main')

@section('main_content')

<div class="mt-5 mx-5 d-flex justify-content">
    <h2 class="">Question</h2>
</div>
    <div class="mx-5 d-flex justify-content-end">
    <a href="{{ route('question.create') }}" class="btn btn-primary">Create</a>
    <a href="{{ URL('/exercises') }}" class="btn btn-warning ms-3">Go Back</a>
</div>

<div class="mx-5 mt-3">
    <table class="table table-striped">
        <tr>
            <th>Exercise ID</th>
            <th>Topic</th>
            <th>Description</th>
            <th>Qchoice1</th>
            <th>Qchoice2</th>
            <th>Qchoice3</th>
            <th>Qchoice4</th>
            <th>Correct Answer</th>
            <th>Action</th>
        </tr>
        @foreach ($questions as $question)
        <tr>
                <td>{{ $question['exercise_id'] }}</td>
                <td>{{ $question['question_topic'] }}</td>
                <td>{{ $question['question_description'] }}</td>
                <td>{{ $question['qchoice1'] }}</td>
                <td>{{ $question['qchoice2'] }}</td>
                <td>{{ $question['qchoice3'] }}</td>
                <td>{{ $question['qchoice4'] }}</td>
                <td>{{ $question['correctanswer'] }}</td>
                <td>
                <form action="{{ route('question.destroy', $question['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('question.edit', $question->id) }}" style="width: 73px;"class="btn btn-dark mt-3">Edit</a>
                    <button type="submit" class="btn btn-danger mt-3">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
    
    
</div>

@endsection

