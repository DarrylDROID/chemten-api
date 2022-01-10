@extends('layouts.main')

@section('main_content')

<img src="{{ asset('img/jumbotron/hiasan.svg') }}" alt="" class="w-full">

<div class="p-5 text-sm md:text-base">
    <p class="font-bold text-bluebg text-center text-xl md:text-3xl">Rules</p>

    <div>
        <ol style="list-style-type: decimal; list-style-position: inside;">
            <li>Terdapat 5 level dalam permainan ini</li>
            <li>Pengguna dapat memilih level mana yang akan dikerjakan pada halaman home</li>
            <li>Level 2 akan terbuka jika poin anda mencapai 75 poin (poin dapat di cek di profil anda)</li>
            <li>Level 3 akan terbuka jika poin anda mencapai 150 poin (poin dapat di cek di profil anda)</li>
            <li>Level 4 akan terbuka jika poin anda mencapai 225 poin (poin dapat di cek di profil anda)</li>
            <li>Level 5 akan terbuka jika poin anda mencapai 300 poin (poin dapat di cek di profil anda)</li>
            <li>Setiap level memiliki 1 quiz berisi 10 soal</li>
            <li>Setiap soal bernilai 10 poin sehingga 1 quiz bernilai 100 poin</li>
            <li>Nilai yang didapat dari setiap quiz akan dimasukkan dalam poin total pengguna</li>
            <li>Sebagai penghargaan, pengguna akan mendapatkan badge setiap melewati total poin berkelipatan 100</li>
            <li>Jika pengguna berhasil mendapatkan 500 poin, maka poin tersebut sudah maksimal dan anda akan mendapatkan badge "complete"</li>
        </ol>
    </div>
</div>

@endsection