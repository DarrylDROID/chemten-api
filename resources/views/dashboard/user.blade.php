@extends('dashboard.layouts.main')

@section('main_content')

<div class="mt-5 mx-5 d-flex justify-content-between">
    <h1>User Account</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
</div>

    <div class="mx-5">
    <table class="mt-2 table table-striped">
        <tr>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Sekolah</th>
            <th>Kota</th>
            <th>Tanggal Lahir</th>
            <th>Action</th>
        </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['sekolah'] }}</td>
            <td>{{ $user['kota'] }}</td>
            <td>{{ $user['tanggal_lahir'] }}</td>
            <td>
                <form action="{{ route('users.destroy', $user['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-dark">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach        
    </table>
</div>
@endsection
