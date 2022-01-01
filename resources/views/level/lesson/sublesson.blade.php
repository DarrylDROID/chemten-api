@extends('layouts.main')

@section('main_content')
<div style="min-height: 50vh">

</div>
<div class="p-5 bg-white" style="min-height: 50vh">
    <h1 class="font-bold text-2xl">{{$sublesson->sublesson_topic}}</h1><br>
    <img class="" src="{{ asset('storage/'.$sublesson->sublesson_image) }}"><br>
    <h2>{{$sublesson->sublesson_description}}</h2>
</div> 
@endsection