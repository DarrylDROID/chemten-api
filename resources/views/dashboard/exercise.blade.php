@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Quiz List</h1>

<div class="mx-5">
    <table class="mt-2 table table-striped">
        <tr>
            <th>Quiz Topic</th>
            <th>Level</th>
            <th>Image</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    @foreach ($exercises as $exercise)
        <tr>
            <td>
                <a href="{{ route('exercises.show', $exercise->id) }}">{{ $exercise->lesson->lesson_topic }}</a>
            </td>
            <td>{{ $exercise->lesson->lesson_level }}</td>
            <td><img src="{{ asset('storage/'. $exercise['exercise_image']) }}" class="rounded-circle" width="50"></td>
            {{-- <td><img src="{{ asset('storage/exercise_image/'. $exercise['exercise_image']) }}" class="rounded-circle" width="50"></td> --}}
            <td>{{ $exercise['exercise_description'] }}</td>
            <td>
                <a href="{{ route('exercises.edit', $exercise->id) }}" class="btn btn-dark mt-3">Edit</a>
            </td>
        </tr>
        @endforeach        
    </table>
</div>

@endsection