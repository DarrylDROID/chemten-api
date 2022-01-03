@extends('layouts.main')

@section('main_content')

<div style="min-height: 50vh">
        
</div>

<table>
    <tr>
        <th>Username</th>            
        <th>Name</th>    
        <th>School</th>
        <th>Score</th>
    </tr>
    @foreach ($leaderboards as $leaderboard)
        <tr>
            <td>{{ $leaderboard->user->username }}</td>
            <td>{{ $leaderboard->user->name }}</td>
            <td>{{ $leaderboard->user->school }}</td>
            <td>{{ $leaderboard['rank_score'] }}</td>
        </tr>
    @endforeach
</table>

@endsection