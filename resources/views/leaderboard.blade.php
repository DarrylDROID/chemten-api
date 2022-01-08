@extends('layouts.main')

@section('main_content')

@php
    $rank = 1;    
@endphp

<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">

<div class="p-5">
    <p class="font-bold text-bluebg mb-2" style="font-size: 30px">Leaderboard</p>

    <div class="grid grid-cols-3 gap-3">
        @foreach ($leaderboards as $leaderboard)    
            @if ($leaderboard->user->kimuser->role == 'student')
                <div class="rounded-md bg-pink-500 py-4 px-6 text-white">
                    <div class="grid grid-cols-6">
                        <div class="bg-white rounded-full w-12 h-12">
                            <div class="flex items-center justify-center w-full h-full">
                                <p class="text-pink-500 font-bold text-2xl">{{ $rank++ }}</p>
                            </div>
                        </div>
                        <div class="col-span-5">
                            <p class="text-xl font-bold">{{ $leaderboard->user->name }}</p>
                            <p class="text-md">{{ $leaderboard['rank_score'] }}</p>
                        </div>                        
                    </div>
                </div>
            @endif    
            
        @endforeach
    </div>
</div>

@endsection