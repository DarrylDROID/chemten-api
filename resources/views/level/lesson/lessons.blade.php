@extends('layouts.main')

@section('main_content')
<div style="min-height: 50vh">

</div>
<div class="p-5 bg-white" style="min-height: 50vh">
    <h1 class="font-bold text-2xl">{{$lesson->lesson_topic}}</h1>
    <h2>{{$lesson->lesson_description}}</h2>
    <br>
    <div class="grid grid-cols-5 gap-5 text-white text-center">

        @foreach ($sublesson as $sublessontopic)
        <div class="rounded-lg bg-pink-500 pb-5" onclick="window.location.href='sublesson/{{$sublessontopic->id}}'">
            <div class="flex justify-center items-center py-5">
                <div class="bg-white rounded-full w-36 h-36 overflow-hidden flex justify-center items-center">
                    <img class="" src="{{ asset('storage/'.$sublessontopic->sublesson_image) }}">
                </div>
            </div> 
            <p class="text-xl font-bold">{{$sublessontopic->sublesson_topic}}</p>
            <p>{{$lesson->lesson_level}}</p>
        </div>
        @endforeach
        <div class="rounded-lg bg-pink-500 pb-5 flex justify-center items-center" onclick="window.location.href='/startquiz/{{$lesson->id}}'">
            <p class="text-xl font-bold">Let's try some <br>Exercise</p>
        </div>
        
    </div>
</div> 
@endsection