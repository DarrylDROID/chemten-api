@extends('layouts.main')

@section('main_content')
<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">
    <div class="p-5 bg-white text-white">
        <h1 class="font-bold text-bluebg mb-4 text-center text-xl md:text-3xl">Profil</h1>

        <div class="hidden md:grid grid-cols-3 gap-3 lg:gap-8">
            <div class="flex justify-center items-center w-full">                                   
                    <div class="bg-pink-500 rounded-2xl w-full h-full">
                        <div class="flex justify-center items-center pt-5">
                            <img class="rounded-full w-44 h-44 lg:w-48 lg:h-48" src="img/orang.png" alt="">
                        </div>      
                        <p class="font-bold text-bluebg text-2xl text-center my-2">{{ $user['name'] }}</p>
                                 
                        <div class="ml-10">                            
                            <p>Surel: {{ $user['email'] }}</p>
                            <p>Username: {{ $user['username'] }}</p>
                            <p>Sekolah: {{ $user['school'] }}</p>
                            <p>Kota: {{ $user['city'] }}</p>
                            <p>Tahun lahir: {{ $user['birthyear'] }}</p>                    
                        </div>    
                        
                        <div class="text-center my-5">
                            <div class="flex items-center justify-center">
                                <div class="bg-white rounded-md text-pink-500 w-5/6 py-1 my-2">
                                    <a href="{{ route('profile.edit', $user['id']) }}">Edit Profil</a>
                                </div>
                            </div>                            
                            
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="bg-white rounded-md text-pink-500 w-5/6 py-1 mb-1">Logout</button>
                            </form>
                        </div>                                           
                    </div>               
            </div>    
            <div class="col-span-2 h-full">
                <div class="bg-pink-500 rounded-2xl p-5 flex">
                    <img src="{{ asset('img/roketbulet.svg') }}" class="w-20 h-20" alt="">
                    <div class="ml-5">
                        <div class="flex items-center h-full">
                            <p class="text-2xl font-bold">Total Poin: {{ Auth::user()->kimuser->rank_score }} / 500</p>
                        </div>
                    </div>
                </div>
                <div class="bg-pink-500 rounded-2xl p-5 mt-3 lg:mt-7">
                    <div class="grid grid-cols-3 grid-rows-2">
                        <div class="col-span-1 row-span-1">
                            <p class="text-center mb-2">100 poin</p>  
                            <div class="flex justify-center items-center">
                            @if (Auth::user()->kimuser->rank_score >= 100)
                                <img src="{{ asset('img/badge/badge1.png') }}" alt="" class="w-28">
                            @else
                                <img src="{{ asset('img/badge/badge1bw.png') }}" alt="" class="w-28">
                            @endif  
                            </div>                                                    
                        </div>
                        <div class="col-span-1 row-span-1">
                            <p class="text-center mb-2">200 poin</p>  
                            <div class="flex justify-center items-center">
                            @if (Auth::user()->kimuser->rank_score >= 200)
                                <img src="{{ asset('img/badge/badge2.png') }}" alt="" class="w-24">
                            @else
                                <img src="{{ asset('img/badge/badge2bw.png') }}" alt="" class="w-24">
                            @endif  
                            </div>                                                    
                        </div>
                        <div class="col-span-1 row-span-2">
                            <div class="flex justify-center items-center h-full">
                            @if (Auth::user()->kimuser->rank_score >= 500)
                                <img src="{{ asset('img/badge/badge5.png') }}" alt="" class="w-56">
                            @else
                                <img src="{{ asset('img/badge/badge5bw.png') }}" alt="" class="w-56">
                            @endif  
                            </div>  
                        </div>
                        <div class="col-span-1 row-span-1">
                            <p class="text-center mb-2">300 poin</p> 
                            <div class="flex justify-center items-center">
                            @if (Auth::user()->kimuser->rank_score >= 300)
                                <img src="{{ asset('img/badge/badge3.png') }}" alt="" class="w-28">
                            @else
                                <img src="{{ asset('img/badge/badge3bw.png') }}" alt="" class="w-28">
                            @endif 
                            </div>                               
                        </div>
                        <div class="col-span-1 row-span-1">
                            <p class="text-center mb-2">400 poin</p> 
                            <div class="flex justify-center items-center">
                            @if (Auth::user()->kimuser->rank_score >= 400)
                                <img src="{{ asset('img/badge/badge4.png') }}" alt="" class="w-32">
                            @else
                                <img src="{{ asset('img/badge/badge4bw.png') }}" alt="" class="w-32">
                            @endif  
                            </div>                              
                        </div>
                    </div>
                </div>
            </div>        
        </div>

        <div class="block md:hidden">
            <div class="flex justify-center items-center w-full">                                   
                <div class="bg-pink-500 rounded-2xl w-full h-full">
                    <div class="flex justify-center items-center pt-5">
                        <img class="rounded-full w-44 h-44 lg:w-48 lg:h-48" src="img/orang.png" alt="">
                    </div>      
                    <p class="font-bold text-bluebg text-2xl text-center my-2">{{ $user['name'] }}</p>
                             
                    <div class="ml-10">                            
                        <p>Email: {{ $user['email'] }}</p>
                        <p>Username: {{ $user['username'] }}</p>
                        <p>Sekolah: {{ $user['school'] }}</p>
                        <p>Kota: {{ $user['city'] }}</p>
                        <p>Tahun lahir: {{ $user['birthyear'] }}</p>                    
                    </div>    
                    
                    <div class="text-center my-5">
                        <div class="flex items-center justify-center">
                            <div class="bg-white rounded-md text-pink-500 w-5/6 py-1 my-2">
                                <a href="{{ route('profile.edit', $user['id']) }}">Edit Profil</a>
                            </div>
                        </div>                            
                        
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="bg-white rounded-md text-pink-500 w-5/6 py-1 mb-1">Logout</button>
                        </form>
                    </div>                                           
                </div>               
            </div>
            <div class="bg-pink-500 rounded-2xl p-3 flex my-5">
                <img src="{{ asset('img/roketbulet.svg') }}" class="w-14 h-14" alt="">
                <div class="ml-5">
                    <div class="flex items-center h-full">
                        <p class="text-lg font-bold">Total Poin: {{ Auth::user()->kimuser->rank_score }} / 500</p>
                    </div>
                </div>
            </div>
            <div class="bg-pink-500 rounded-2xl p-5 mt-3 lg:mt-7">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <p class="text-center mb-2">100 poin</p>  
                        <div class="flex justify-center items-center">
                        @if (Auth::user()->kimuser->rank_score >= 100)
                            <img src="{{ asset('img/badge/badge1.png') }}" alt="" class="w-24">
                        @else
                            <img src="{{ asset('img/badge/badge1bw.png') }}" alt="" class="w-24">
                        @endif  
                        </div>                                                    
                    </div>
                    <div class="col-span-1">
                        <p class="text-center mb-2">200 poin</p>  
                        <div class="flex justify-center items-center">
                        @if (Auth::user()->kimuser->rank_score >= 200)
                            <img src="{{ asset('img/badge/badge2.png') }}" alt="" class="w-20">
                        @else
                            <img src="{{ asset('img/badge/badge2bw.png') }}" alt="" class="w-20">
                        @endif  
                        </div>                                                    
                    </div>                    
                    <div class="col-span-1">
                        <p class="text-center mb-2">300 poin</p> 
                        <div class="flex justify-center items-center">
                        @if (Auth::user()->kimuser->rank_score >= 300)
                            <img src="{{ asset('img/badge/badge3.png') }}" alt="" class="w-24">
                        @else
                            <img src="{{ asset('img/badge/badge3bw.png') }}" alt="" class="w-24">
                        @endif 
                        </div>                               
                    </div>
                    <div class="col-span-1">
                        <p class="text-center mb-2">400 poin</p> 
                        <div class="flex justify-center items-center">
                        @if (Auth::user()->kimuser->rank_score >= 400)
                            <img src="{{ asset('img/badge/badge4.png') }}" alt="" class="w-28">
                        @else
                            <img src="{{ asset('img/badge/badge4bw.png') }}" alt="" class="w-28">
                        @endif  
                        </div>                              
                    </div>
                    <div class="col-span-2">
                        <div class="flex justify-center items-center h-full">
                        @if (Auth::user()->kimuser->rank_score >= 500)
                            <img src="{{ asset('img/badge/badge5.png') }}" alt="" class="w-48">
                        @else
                            <img src="{{ asset('img/badge/badge5bw.png') }}" alt="" class="w-48">
                        @endif  
                        </div>  
                    </div>
                </div>
            </div>
        </div>
            
    </div> 
@endsection