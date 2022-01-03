@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Lesson</h1>

<div class="mx-5">
    <table class="mt-2 table table-striped">
        <tr>
            <th>Topic</th>
            <th>Level</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    @foreach ($lessons as $lesson)
        <tr>
            <td>
                <a href="{{ route('lessons.show', $lesson->id) }}">{{ $lesson['lesson_topic'] }}</a>
            </td>
            <td>{{ $lesson['lesson_level'] }}</td>
            <td>{!! $lesson['lesson_description'] !!}</td>
            <td>
                <a href="{{ route('lessons.edit', $lesson->id) }}" class="btn btn-dark mt-3">Edit</a>
            </td>
        </tr>
        @endforeach        
    </table>
</div>

@endsection