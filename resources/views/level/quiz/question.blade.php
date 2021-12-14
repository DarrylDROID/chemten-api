@extends('layouts.logres')

@section('main_content')
    <div style="min-height: 40vh">

    </div>
    <div class="p-5 bg-white" style="min-height: 60vh">
        <p>Pertanyaan 1 dari 10</p>
        <h1 class="font-bold text-2xl">Pertanyaan</h1>
        
        <form class="my-3" action="">
            <button class="rounded-md bg-pink-500 py-2 px-10 text-white">option 1</button>
        </form>

        <div class="flex justify-end mt-10">
            <button class="rounded-full bg-pink-500 py-2 px-16 text-white text-xl">Next -></button>
        </div> 
    </div>       
@endsection