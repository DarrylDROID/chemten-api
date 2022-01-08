@extends('layouts.main')

@section('main_content')
<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">

<div>
    <h1 class="text-bluebg text-2xl font-bold text-center my-4">Selamat!</h1>
    <div class="flex justify-center">
        <div class="rounded-full border-4 border-pink-500 w-60 h-60">
            <div class="flex justify-center items-center w-60 h-60 -mt-1 -ml-1">
                <h1 class="text-pink-500 font-bold" style="font-size: 80px">{{ $score }}</h1>
            </div>
        </div>
    </div>
    <div class="flex justify-center md:justify-end my-5">
        <a class="rounded-md bg-pink-500 py-2 px-10 text-white" href="/startquiz/{{ $exercise }}">Ulangi <i class="fas fa-undo"></i></a>
        <a class="rounded-md bg-pink-500 py-2 px-10 text-white mx-3" href="/">Kembali <i class="fas fa-arrow-right"></i></a>
    </div>    
</div>

@endsection