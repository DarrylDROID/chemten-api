@extends('layouts.main')

@section('main_content')
    @php
        $exerciseid = $exercise['id'];   
    @endphp
    <div style="min-height: 40vh">

    </div>
    <div class="p-5 bg-white">
        <h1 class="font-bold text-2xl">{{ $exercise['exercise_topic'] }}</h1>
        <p class="font-bold">{{ $exercise['exercise_level'] }}</p>
        <p>{{ $exercise['exercise_description'] }}</p>
        <div class="flex justify-end mt-10">
            <a href="/quiz/{{ $exerciseid }}/1" class="rounded-full bg-pink-500 py-2 px-16 text-white text-xl">Start</a>
        </div> 
    </div>       
@endsection