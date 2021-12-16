@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">{{ $sublesson['sublesson_topic'] }}</h1>

<div class="mx-5">
    <p>{{ $sublesson['sublesson_description'] }}</p>  
    <a href="" class="btn btn-dark mt-3">Edit</a>
</div>

@endsection

