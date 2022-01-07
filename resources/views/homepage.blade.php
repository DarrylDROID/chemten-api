@extends('layouts.main')

@section('main_content')
    <img src="{{ asset('img/jumbotron/home.svg') }}" alt="" class="w-full">

    @php
        $index = 0;
    @endphp

    <div class="p-5">
        <p class="font-bold text-bluebg mb-2" style="font-size: 30px">Lessons</p>
        <div class="grid grid-cols-5 text-white text-center">
            {{-- @foreach ($lesson as $lessonlevel)
            <div class="rounded-lg bg-pink-500 pb-5" onclick="window.location.href='lesson/{{$lessonlevel->id}}'">
                <div class="flex justify-center items-center py-5">
                    <div class="bg-white rounded-full w-36 h-36 overflow-hidden">
                        <img src="{{ asset('storage/'.$exercise[$indexx++]["exercise_image"])}}"><br>
                    </div>
                </div> 
                <p class="text-xl font-bold">{{$lessonlevel->lesson_topic}}</p>
                <p>{{$lessonlevel->lesson_level}}</p>
            </div>
            @endforeach --}}
            @foreach ($lesson as $lessonlevel)
                <div class="w-64 shadow-xl mb-2">
                    <img src="{{ asset('storage/'.$exercise[$index++]["exercise_image"])}}" class="w-full h-72" alt="">
                    <div class="flex items-center justify-center">
                        <div class="bg-pink-500 w-1/2 p-2 -mt-5 z-10 shadow-lg">
                            <div class="flex items-center justify-center">
                                <p>{{$lessonlevel->lesson_level}}</p>
                            </div>
                        </div>                        
                    </div>
                    <p class="text-xl font-bold text-bluebg mt-2 mb-1">{{$lessonlevel->lesson_topic}}</p>
                    <p class="text-sm text-bluebg mb-3">3 Materi dan 1 Quiz</p>
                    <div class="bg-pink-300 p-2">
                        <a href="lesson/{{$lessonlevel->id}}">
                            <div class="flex justify-between">
                                <p class="text-sm ml-2">Selengkapnya</p>
                                <p><i class="fas fa-arrow-right mr-2"></i></p>                            
                            </div>
                        </a>                        
                    </div>
                </div>
            @endforeach            
        </div>
        
    </div> 
@endsection