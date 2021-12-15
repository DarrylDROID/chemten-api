@extends('dashboard.layouts.main')

@section('main_content')

<h1 class="mt-5 ms-5">Create Sublesson</h1>

<form action="" method="POST" class="mt-2 ms-5">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Sublesson topic</label>
                    <input type="text" class="form-control" name="code" required>
                </div>                
                <div class="form-group">
                    <label for="">Sublesson description</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label for="">Image sementara</label>
                    <input type="text" class="form-control" name="lecturer" required>
                </div>

                <div class="form-group mt-3">
                    <input type="submit" value="Save" class="btn btn-dark">
                </div>
            </div>
        </div>        
    </div>
</form>

@endsection