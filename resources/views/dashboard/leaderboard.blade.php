@extends('dashboard.layouts.main')

@section('main_content')

<div class="mt-5 mx-5 d-flex justify-content-between">
    <h1>Leaderboard</h1>
</div>

    <div class="mx-5">
    <table class="mt-2 table table-striped">
        <tr>
            <th>User ID</th>
            <th>Rank Score</th>
        </tr>
    @foreach ($leaderboards as $leaderboard)
        <tr>
            <td>{{ $leaderboard['user_id'] }}</td>
            <td>{{ $leaderboard['rank_score'] }}</td>
        </tr>
        @endforeach        
    </table>
</div>
@endsection
