@extends('layouts.logres')

@section('main_content')
    @php
        $exercise = $question['exercise_id'];  
        $number = $question['id'] + 1;  

        if ($exercise == 1) {
            $nomor = $question['id'];
        } else {
            $nomor = $question['id'];
        }

        if ($number > 11) {
            $nomor = $question['id'] - 10;
        }            
        else if ($number > 21) {
            $nomor = $question['id'] - 20;
        }
        else if ($number > 31) {
            $nomor = $question['id'] - 30;
        }
        else if ($number > 41) {
            $nomor = $question['id'] - 40;
        } else {
            $nomor = $question['id'];
        }
    @endphp

    <div style="min-height: 40vh">

    </div>
    <div class="p-5 bg-white" style="min-height: 60vh">
        <p class="">Pertanyaan {{ $nomor }} dari 10</p>
        <h1 class="font-bold text-2xl my-3">{{ $question['question_description'] }}</h1>

        @if ($nomor == 10)
        <form class="my-5" action="/finish/{{ $exercise }}/{{ Auth::user()->id }}/{{ $number }}" method="GET">
            @csrf
            <input type="radio" id="choice1" name="answer" value="{{ $question['qchoice1'] }}" style="display: none" required>
            <label for="choice1" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice1'] }}</label>
            <input type="radio" id="choice2" name="answer" value="{{ $question['qchoice2'] }}" style="display: none" required>
            <label for="choice2" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice2'] }}</label>
            <input type="radio" id="choice3" name="answer" value="{{ $question['qchoice3'] }}" style="display: none" required>
            <label for="choice3" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice3'] }}</label>
            <input type="radio" id="choice4" name="answer" value="{{ $question['qchoice4'] }}" style="display: none" required>
            <label for="choice4" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice4'] }}</label>

            <input type="submit" class="rounded-full bg-pink-500 py-2 px-16 text-white text-xl" value="Finish ->">
        </form>
        @else 
        <form class="my-5" action="/answer/{{ $exercise }}/{{ $number }}" method="POST">
            @csrf
            <input type="radio" id="choice1" name="answer" value="{{ $question['qchoice1'] }}" style="display: none" required>
            <label for="choice1" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice1'] }}</label>
            <input type="radio" id="choice2" name="answer" value="{{ $question['qchoice2'] }}" style="display: none" required>
            <label for="choice2" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice2'] }}</label>
            <input type="radio" id="choice3" name="answer" value="{{ $question['qchoice3'] }}" style="display: none" required>
            <label for="choice3" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice3'] }}</label>
            <input type="radio" id="choice4" name="answer" value="{{ $question['qchoice4'] }}" style="display: none" required>
            <label for="choice4" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice4'] }}</label>

            <input type="submit" class="rounded-full bg-pink-500 py-2 px-16 text-white text-xl" value="Next ->">
        </form>
        @endif 
    </div>       
@endsection