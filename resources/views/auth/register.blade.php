@extends('layouts.logres')

@section('main_content')
    <div class="flex items-center justify-center py-5">
        <img src="img/logo.png" alt="" width="250">
    </div>
    <div class="flex items-center justify-center pb-3">
        <div class="bg-white rounded-lg w-1/2">
            <form class="p-5" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="px-5">                    
                    <input name="email" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="email" required>
                    <input name="password" class="border-2 border-gray-300 rounded-md mt-4 w-full p-2"
                        type="text" placeholder="password" required>
                    <input name="name" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="nama" required>
                    <input name="username" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="username" required>
                    <input name="school" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="sekolah" required>
                    <input name="city" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="kota" required>
                    <input name="birthyear" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="number" placeholder="tahun lahir" required>

                    <button type="submit" class="bg-pink-500 rounded-md mt-4 w-full p-2 text-white">
                        {{ __('Register') }}
                    </button>
                </div>                
            </form>            
        </div>        
    </div>
    <div class="flex items-center justify-center pb-3">
        <div class="w-1/2">
            <p class="text-white text-center">Sudah memiliki akun? <a href="/login" class="text-decoration-none font-bold">Login</a></p>
        </div>        
    </div>
    
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
