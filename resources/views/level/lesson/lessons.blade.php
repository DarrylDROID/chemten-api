@extends('layouts.main')

@section('main_content')
<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">
<div class="p-5 bg-white" style="min-height: 50vh">
    <h1 class="font-bold text-2xl">{{$sublessons[0]->lesson->lesson_topic}}</h1>
    <p>{!! $sublessons[0]->lesson->lesson_description !!}</p>
    <br>
    <div class="grid grid-cols-5 gap-5 text-white text-center">

        @foreach ($sublessons as $sublesson)
        <div class="w-64 shadow-xl mb-2">
            <img src="{{ asset('storage/'.$sublesson->sublesson_image) }}" class="w-full h-52" alt="">
            <div class="flex items-center justify-center">
                <div class="bg-pink-500 w-1/2 p-2 -mt-5 z-10 shadow-lg">
                    <div class="flex items-center justify-center">
                        <p>{{$sublesson->lesson->lesson_level}}</p>
                    </div>
                </div>                        
            </div>
            <p class="text-xl font-bold text-bluebg mt-2 mb-1">{{$sublesson->sublesson_topic}}</p>
            <p class="text-sm text-bluebg mb-3">{{$sublesson->lesson->lesson_topic}}</p>
            <div class="bg-pink-300 p-2">
                <a href="sublesson/{{$sublesson->id}}">
                    <div class="flex justify-between">
                        <p class="text-sm ml-2">Lihat Materi</p>
                        <p><i class="fas fa-arrow-right mr-2"></i></p>                            
                    </div>
                </a>                        
            </div>
        </div>
        @endforeach
        <div class="rounded-lg bg-pink-500 pb-5 flex justify-center items-center" onclick="window.location.href='/startquiz/{{$sublesson->lesson->id}}'">
            <p class="text-xl font-bold">Let's try some <br>Exercise</p>
        </div>
        
    </div>
</div> 
@endsection