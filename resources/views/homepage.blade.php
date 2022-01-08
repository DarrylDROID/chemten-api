@extends('layouts.main')

@section('main_content')
    <img src="{{ asset('img/jumbotron/home.svg') }}" alt="" class="w-full">

    @php
        $index = 0;
    @endphp

    <div class="p-2 md:p-5 lg:p-2 xl:p-5">
        <p class="font-bold text-bluebg mb-5 text-xl md:text-3xl text-center">Lessons</p>
        <div class="flex justify-center items-center">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 lg:gap-3 xl:gap-8 text-white text-center">
            @foreach ($lesson as $lessonlevel)
                <div class="w-36 md:w-48 xl:w-56 shadow-xl mb-2">
                    <img src="{{ asset('storage/'.$lesson[$index++]->sublesson[0]->sublesson_image)}}" class="w-full h-72" alt="">
                    <div class="flex items-center justify-center">
                        <div class="bg-pink-500 w-1/2 p-2 -mt-5 z-10 shadow-lg">
                            <div class="flex items-center justify-center">
                                <p class="text-sm md:text-base">{{$lessonlevel->lesson_level}}</p>
                            </div>
                        </div>                        
                    </div>
                    <p class="text-base md:text-xl font-bold text-bluebg mt-2 mb-1">{{$lessonlevel->lesson_topic}}</p>
                    @if ($index == 1)
                        <p class="text-sm text-bluebg mb-3">{{ $count1 }} Materi dan 1 Quiz</p>
                    @elseif ($index == 2)
                        <p class="text-sm text-bluebg mb-3">{{ $count2 }} Materi dan 1 Quiz</p>
                    @elseif ($index == 3)
                        <p class="text-sm text-bluebg mb-3">{{ $count3 }} Materi dan 1 Quiz</p>
                    @elseif ($index == 4)
                        <p class="text-sm text-bluebg mb-3">{{ $count4 }} Materi dan 1 Quiz</p>
                    @elseif ($index == 5)
                        <p class="text-sm text-bluebg mb-3">{{ $count5 }} Materi dan 1 Quiz</p>
                    @endif
                    
                    @if ($score->rank_score >= ($index-1)*75)
                        <div class="bg-pink-300 p-2">
                            <a href="lesson/{{$lessonlevel->id}}">
                                <div class="flex justify-between">
                                    <p class="text-sm ml-2">Selengkapnya</p>
                                    <p><i class=" text-sm fas fa-arrow-right mr-2"></i></p>                            
                                </div>
                            </a>                        
                        </div>
                    @else
                        <div class="bg-gray-400 p-2">
                            <a id="open_modal">
                                <div class="flex justify-center">
                                    <p class="text-sm ml-2 pb-1">Minimal poin: {{ ($index-1)*75 }}</p>                          
                                </div>
                            </a>                        
                        </div>
                    @endif
                    
                </div>
            @endforeach            
        </div> 
        </div>       
    </div> 
@endsection