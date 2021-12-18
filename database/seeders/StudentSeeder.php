<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kim10_students')->insert([
            'name' => 'User',
            'username' => 'Student123',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'sekolah' => 'sekolah123',
            'kota' => 'kota123',
            'tanggal_lahir' => 'mm/dd/yyyy',
            'role' => 'student',
            'created_at' => \Carbon\Carbon::now(),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}