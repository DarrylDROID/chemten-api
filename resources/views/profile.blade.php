@extends('layouts.main')

@section('main_content')
<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">
    <div class="p-5 bg-white text-white">
        <h1 class="font-bold text-bluebg mb-2" style="font-size: 30px">Profil</h1>
        <div class="grid grid-cols-3 gap-5">
            <div class="flex justify-center items-center">
                <div class="w-2/3">                    
                    <div class="bg-pink-500 rounded-2xl">
                        <div class="flex justify-center items-center pt-5">
                            <img class="rounded-full w-48 h-48" src="img/orang.png" alt="">
                        </div>      
                        <p class="font-bold text-bluebg text-2xl text-center my-2">{{ $user['name'] }}</p>
                                 
                        <div class="ml-10">                            
                            <p>Email: {{ $user['email'] }}</p>
                            <p>Username: {{ $user['username'] }}</p>
                            <p>Sekolah: {{ $user['school'] }}</p>
                            <p>Kota: {{ $user['city'] }}</p>
                            <p>Tahun lahir: {{ $user['birthyear'] }}</p>                    
                        </div>
    
                        <div class="text-center">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="bg-white rounded-md text-pink-500 w-5/6 py-1 my-5">Logout</button>
                            </form>
                        </div>                      
                        
                    </div>
                </div>
            </div>    
            <div class="col-span-2">
                <div class="bg-pink-500 rounded-2xl">
                    
                </div>
            </div>        
        </div>
            
    </div> 
@endsection