@extends('layouts.main')

@section('main_content')
    <div style="min-height: 50vh">

    </div>
    <div class="p-5 bg-white" style="min-height: 50vh">
        <div class="grid grid-cols-5 gap-5 text-white text-center">

            @foreach ($lesson as $lessonlevel)
            <div class="rounded-lg bg-pink-500 pb-5" onclick="window.location.href='lesson/{{$lessonlevel->id}}'">
                <div class="flex justify-center items-center py-5">
                    <div class="bg-white rounded-full w-36 h-36"></div>
                </div> 
                <p class="text-xl font-bold">{{$lessonlevel->lesson_topic}}</p>
                <p>{{$lessonlevel->lesson_level}}</p>
            </div>
            @endforeach
            
        </div>
    </div> 
@endsection