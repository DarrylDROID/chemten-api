@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">{{ $sublesson['sublesson_topic'] }}</h1>

<div class="mx-5">
    <img src="{{ asset('storage/'. $sublesson['sublesson_image']) }}" class="rounded" width="auto">
    <p>{!! $sublesson['sublesson_description'] !!}</p>  
    <a href="{{ route('sublesson.edit', $sublesson->id) }}" class="btn btn-dark mt-3">Edit</a>
    <a href="{{ URL::previous() }}" class="btn btn-warning mt-3">Go Back</a>
</div>

@endsection

