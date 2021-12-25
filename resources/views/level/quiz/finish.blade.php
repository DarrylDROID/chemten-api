@extends('layouts.main')

@section('main_content')
<h1 class="text-xl font-bold text-center text-white">Your Score is {{ $score }}</h1>
<a class="text-white" href="/startquiz/{{ $exercise }}">Retry</a>
<a class="text-white" href="/">Back to Home</a>
@endsection