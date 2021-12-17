@extends('dashboard.layouts.main')

@section('main_content')

<div class="mt-5 mx-5 d-flex justify-content-between">
    <h2 class="">Sublesson</h2>

    <a href="{{ URL('/lessons') }}" class="btn btn-warning">Go Back</a>
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
            <td>
                <form action="{{ route('sublesson.destroy', $sublesson['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('sublesson.create') }}" class="btn btn-dark">Create</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
    
    
</div>

@endsection

