@extends('layouts.logres')

@section('main_content')
        <div class="flex items-center justify-center py-5">
            <img src="img/logo.png" alt="" width="250">
        </div>
        <div class="flex items-center justify-center pb-3">
            <div class="bg-white rounded-lg w-1/2">
                <form method="POST" action="{{ route('login') }}" class="p-5">
                    @csrf
                    <div class="px-5">
                        <input name="email" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                            type="text" placeholder="Email" required>
                        <input name="password" class="border-2 border-gray-300 rounded-md mt-4 w-full p-2"
                            type="password" placeholder="Password" required>
                        <button type="submit" class="bg-pink-500 rounded-md mt-4 w-full p-2 text-white">
                            {{ __('Login') }}
                        </button>
                    </div>                
                </form>            
            </div>        
        </div>
        <div class="flex items-center justify-center pb-3">
            <div class="w-1/2">
                <p class="text-white text-center">Tidak memiliki akun? <a href="/register" class="text-decoration-none font-bold">Registrasi</a></p>
            </div>        
        </div>

@endsection