@extends('layouts.main')

@section('main_content')

@php
    $rank = 0;    
@endphp

<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">

<div class="p-5">
    <p class="font-bold text-bluebg mb-2" style="font-size: 30px">Leaderboard</p>

    <div class="grid grid-cols-3 gap-3">
        @foreach ($leaderboards as $leaderboard)
    
            @if ($leaderboard->user->kimuser->role == 'student')
                <div class="rounded-md bg-pink-500 py-2 px-10 text-white">
                    <div class="grid grid-cols-2 gap-3">
                        <div style="background: url('img/star.svg')">
                            <p>1</p>
                        </div>
                        <div>
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