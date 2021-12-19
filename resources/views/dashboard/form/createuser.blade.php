@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Create User</h1>

<form action="{{ route('users.store') }}" method="POST" class="mt-2 ms-5" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>                
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control" name="password" required>
                </div>
                <div class="form-group">
                    <label for="">Sekolah</label>
                    <input type="text" class="form-control" name="sekolah" required>
                </div>
                <div class="form-group">
                    <label for="">Kota</label>
                    <input type="text" class="form-control" name="kota" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" required>
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