@extends('layouts.main')

@section('main_content')

@php
    $rank = 1;    
@endphp

<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">

<div class="p-2 md:p-5">
    <p class="font-bold text-bluebg text-center text-xl md:text-3xl">Leaderboard</p>

    <div class="lg:grid grid-cols-2 xl:grid-cols-3 gap-3 mt-3">
        @foreach ($leaderboards as $leaderboard)    
            @if ($leaderboard->user->kimuser->role == 'student')
                <div class="rounded-md bg-pink-500 py-2 md:py-4 px-3 md:px-6 text-white mt-2">
                    <div class="grid grid-cols-6">
                        <div class="bg-white rounded-full w-12 h-12">
                            <div class="flex items-center justify-center w-full h-full">
                                <p class="text-pink-500 font-bold text-2xl">{{ $rank++ }}</p>
                            </div>
                        </div>
                        <div class="col-span-5">
                            <p class="text-base md:text-xl font-bold">{{ $leaderboard->user->name }}</p>
                            <p class="text-sm md:text-base">{{ $leaderboard['rank_score'] }}</p>
                        </div>                        
                    </div>
                </div>
            @endif    
            
        @endforeach
    </div>
</div>

@endsection