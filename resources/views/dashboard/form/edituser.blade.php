@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Edit User</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $user['name'] }}" required>
                </div>       
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" value="{{ $user['username'] }}" required>
                </div>          
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" value="{{ $user['email'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" value="{{ $user['password'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">School</label>
                    <input type="text" class="form-control" name="school" value="{{ $user['school'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <input type="text" class="form-control" name="city" value="{{ $user['city'] }}" required>
                </div>
                <div class="form-group">
                    <label for="">Birthyear</label>
                    <input type="text" class="form-control" name="birthyear" value="{{ $user['birthyear'] }}" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                    <a href="{{ URL::previous() }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
        </div>        
    </div>
</form>

@endsection