<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kim10_users')->insert([
            'nama' => 'User',
            'username' => 'User123',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'sekolah' => 'sekolah123',
            'kota' => 'kota123',
            'tanggal_lahir' => 'mm/dd/yyyy',
            'role' => 'user',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
