@extends('dashboard.layouts.main')

@section('main_content')

<div class="mt-5 mx-5 d-flex justify-content-between">
    <h2 class="">Sublesson</h2>

    <a href="dashboard.form.createsublesson" class="btn btn-dark">Create</a>
</div>


<div class="mx-5 mt-3">
    <table class="table table-striped">
        <tr>
            <th>Topic</th>
            <th>Action</th>
        </tr>
        @foreach ($sublessons as $sublesson)
        <tr>
            <td>
                <a href="{{ route('sublesson.show', $sublesson['id']) }}">{{ $sublesson['sublesson_topic'] }}</a>
            </td>
            <td><a href="" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        
    </table>
    
    
</div>

@endsection

