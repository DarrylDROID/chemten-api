@extends('layouts.logres')

@section('main_content')
    <div class="flex items-center justify-center py-5">
        <img src="img/logo.png" alt="" width="250">
    </div>
    <div class="flex items-center justify-center pb-3">
        <div class="bg-white rounded-lg w-1/2">
            <form class="p-5" action="">
                <div class="px-5">                    
                    <input name="email" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="email" required>
                    <input name="password" class="border-2 border-gray-300 rounded-md mt-4 w-full p-2"
                        type="text" placeholder="password" required>
                    <input name="nama" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="nama" required>
                    <input name="username" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="username" required>
                    <input name="sekolah" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="sekolah" required>
                    <input name="kota" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="text" placeholder="kota" required>
                    <input name="tgl_lahir" class="border-2 border-gray-300 rounded-md mt-2 w-full p-2"
                        type="date" required>

                    <input class="bg-pink-500 rounded-md mt-4 w-full p-2 text-white" type="submit" value="Register">
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