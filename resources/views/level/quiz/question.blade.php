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

        if ($number > 41) {
            $nomor = $question['id'] - 40;
        }            
        else if ($number > 31) {
            $nomor = $question['id'] - 30;
        }
        else if ($number > 21) {
            $nomor = $question['id'] - 20;
        }
        else if ($number > 11) {
            $nomor = $question['id'] - 10;
        } else {
            $nomor = $question['id'];
        }
    @endphp

<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">
    <div class="p-5 bg-white">
        <p class="">Pertanyaan {{ $nomor }} dari 10</p>
        <h1 class="font-bold text-xl md:text-2xl my-3">{!! $question['question_description'] !!}</h1>

        @if ($nomor == 10)
        <form class="my-5" action="/answerfinish/{{ $exercise }}/{{ $number }}" method="POST">
            @csrf
            <div class="flex mt-2">
                <input type="radio" id="choice1" name="answer" value="{{ $question['qchoice1'] }}" style="display: none"
                    @if ($answer)
                        @if ($answer->user_answer == $question['qchoice1']) {
                            checked
                        }
                        @endif
                    @endif 
                required>
                <label for="choice1" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice1'] }}</label>
                </div>   
                <div class="flex mt-2">         
                <input type="radio" id="choice2" name="answer" value="{{ $question['qchoice2'] }}" style="display: none"
                    @if ($answer)
                        @if ($answer->user_answer == $question['qchoice2']) {
                            checked
                        }
                        @endif
                    @endif 
                required>
                <label for="choice2" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice2'] }}</label>
                </div>
                <div class="flex mt-2">
                <input type="radio" id="choice3" name="answer" value="{{ $question['qchoice3'] }}" style="display: none" 
                    @if ($answer)
                        @if ($answer->user_answer == $question['qchoice3']) {
                            checked
                        }
                        @endif
                    @endif 
                required>           
                <label for="choice3" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice3'] }}</label>
                </div>
                <div class="flex mt-2">
                    <input type="radio" id="choice4" name="answer" value="{{ $question['qchoice4'] }}" style="display: none" 
                    @if ($answer)
                        @if ($answer->user_answer == $question['qchoice4']) {
                            checked
                        }
                        @endif
                    @endif 
                required>
                <label for="choice4" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice4'] }}</label>
                </div>
            <div class="flex justify-between mt-10">
                <input type="submit" class="rounded-full bg-pink-500 py-2 px-8 md:px-16 text-white text-base md:text-xl" value="<- Previous" formaction="/answerr/{{ $exercise }}/{{ $number-2 }}" method="POST">
                <input type="submit" class="rounded-full bg-pink-500 py-2 px-16 text-white text-xl" value="Finish ->">
            </div>       
        </form>
        
        @else 
        <form class="my-5" action="/answer/{{ $exercise }}/{{ $number }}" method="POST">
            @csrf
            <div class="flex mt-2">
            <input type="radio" id="choice1" name="answer" value="{{ $question['qchoice1'] }}" style="display: none"
                @if ($answer)
                    @if ($answer->user_answer == $question['qchoice1']) {
                        checked
                    }
                    @endif
                @endif 
            required>
            <label for="choice1" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice1'] }}</label>
            </div>   
            <div class="flex mt-2">         
            <input type="radio" id="choice2" name="answer" value="{{ $question['qchoice2'] }}" style="display: none"
                @if ($answer)
                    @if ($answer->user_answer == $question['qchoice2']) {
                        checked
                    }
                    @endif
                @endif 
            required>
            <label for="choice2" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice2'] }}</label>
            </div>
            <div class="flex mt-2">
            <input type="radio" id="choice3" name="answer" value="{{ $question['qchoice3'] }}" style="display: none" 
                @if ($answer)
                    @if ($answer->user_answer == $question['qchoice3']) {
                        checked
                    }
                    @endif
                @endif 
            required>           
            <label for="choice3" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice3'] }}</label>
            </div>
            <div class="flex mt-2">
                <input type="radio" id="choice4" name="answer" value="{{ $question['qchoice4'] }}" style="display: none" 
                @if ($answer)
                    @if ($answer->user_answer == $question['qchoice4']) {
                        checked
                    }
                    @endif
                @endif 
            required>
            <label for="choice4" class="rounded-md bg-pink-500 py-2 px-10 text-white radioquestion">{{ $question['qchoice4'] }}</label>
            </div>
            @if ($nomor==1)
            <div class="flex justify-end mt-10">                
                <input type="submit" class="rounded-full bg-pink-500 py-2 px-8 md:px-16 text-white text-base md:text-xl" value="Next ->">
            </div>
            @else
            <div class="flex justify-between mt-10">                
                <input type="submit" class="rounded-full bg-pink-500 py-2 px-8 md:px-16 text-white text-base md:text-xl" value="<- Previous" formaction="/answerr/{{ $exercise }}/{{ $number-2 }}">
                <input type="submit" class="rounded-full bg-pink-500 py-2 px-8 md:px-16 text-white text-base md:text-xl" value="Next ->">
            </div>
            @endif                    
        </form>
        @endif             
    </div>       
@endsection