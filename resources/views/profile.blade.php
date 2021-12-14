@extends('layouts.main')

@section('main_content')
    <div style="min-height: 40vh">

    </div>
    <div class="p-5 bg-white text-white" style="min-height: 55vh">
        <div class="grid grid-cols-3 gap-5">
            <div class="w-2/3">
                <div class="bg-pink-500 text-center rounded-2xl -mt-24">
                    <div class="flex justify-center items-center py-5">
                        <div class="bg-white rounded-full w-48 h-48"></div>
                    </div>                
                    <p>Username</p>
                    <p>Email</p>
                    <p>Nama</p>
                    <p>Sekolah</p>
                    <p>Kota</p>
                    <p>tgl lahir</p>
                    <button class="bg-white rounded-md text-pink-500 px-5 py-1 my-5">Edit Profil</button>
                </div>
            </div>
        </div>
            
    </div> 
@endsection