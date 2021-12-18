@extends('dashboard.layouts.main')

@section('main_content')

<div class="mt-5 mx-5 d-flex justify-content-between">
    <h1>User</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary">Create</a>
</div>

    <div class="mx-5">
    <table class="mt-2 table table-striped">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['role'] }}</td>
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

{{-- <div class="mt-5 mx-5 d-flex justify-content-between">
<h1>Student</h1>
<a href="{{ route('students.create') }}" class="btn btn-primary">Create</a>
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
            <th>Role</th>
        </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['username'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['sekolah'] }}</td>
            <td>{{ $student['kota'] }}</td>
            <td>{{ $student['tanggal_lahir'] }}</td>
            <td>{{ $student['role'] }}</td>
            <td>
                <form action="{{ route('students.destroy', $student['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-dark">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach        
    </table>
</div> --}}
@endsection