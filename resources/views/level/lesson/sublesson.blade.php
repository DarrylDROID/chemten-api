@extends('layouts.main')

@section('main_content')
<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">
<div class="p-5 bg-white">
    <h1 class="font-bold text-2xl">{{$sublesson->sublesson_topic}}</h1><br>
    <img class="h-80" src="{{ asset('storage/'.$sublesson->sublesson_image) }}"><br>
    <p>{!! $sublesson->sublesson_description !!}</p>
</div> 
@endsection