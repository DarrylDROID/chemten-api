@extends('layouts.main')

@section('main_content')
<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">
<div class="mt-5 mb-1 flex items-center justify-center">
    <h1 class="text-3xl font-bold text-blue-bg">Edit Profile</h1>
</div>

<div class="flex items-center justify-center pb-3">
    <div class="bg-white rounded-lg 2/3 lg:w-1/2">
        <form class="p-5" method="POST" action="{{ route('profile.update', $user->id) }}">
            @csrf
            <input type="hidden" name="_method" value="PATCH">

            <div class="px-5">      
                <label for="" class="mt-2">Email</label>              
                <input name="email" class="border-2 border-gray-300 rounded-md w-full p-2"
                    type="text" placeholder="email" required value="{{ $user['email'] }}">
                <label for="" class="mt-2">Nama</label> 
                <input name="name" class="border-2 border-gray-300 rounded-md w-full p-2"
                    type="text" placeholder="nama" required value="{{ $user['name'] }}">
                <label for="" class="mt-2">Username</label> 
                <input name="username" class="border-2 border-gray-300 rounded-md w-full p-2"
                    type="text" placeholder="username" required value="{{ $user['username'] }}">
                <label for="" class="mt-2">Sekolah</label> 
                <input name="sekolah" class="border-2 border-gray-300 rounded-md w-full p-2"
                    type="text" placeholder="sekolah" required value="{{ $user['school'] }}">
                <label for="" class="mt-2">Kota</label> 
                <input name="kota" class="border-2 border-gray-300 rounded-md w-full p-2"
                    type="text" placeholder="kota" required value="{{ $user['city'] }}">
                <label for="" class="mt-2">Tahun lahir</label> 
                <input name="tahun_lahir" class="border-2 border-gray-300 rounded-md w-full p-2"
                    type="number" placeholder="tahun lahir" required value="{{ $user['birthyear'] }}">

                <button type="submit" class="bg-pink-500 rounded-md mt-4 w-full p-2 text-white">
                    Save
                </button>
            </div>                
        </form>            
    </div>        
</div>
@endsection