<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kim10_lesson')->insert([
            'lesson_topic' => 'Hukum Lavoisier',
            'lesson_level' => "Level 1",
            'lesson_description' => 'Dalam setiap reaksi kimia, jumlah massa zat-zat sebelum dan sesudah reaksi
            adalah sama.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_lesson')->insert([
            'lesson_topic' => 'Hukum Proust',
            'lesson_level' => "Level 2",
            'lesson_description' => 'Perbandingan massa unsur-unsur penyusun suatu senyawa selalu tetap.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_lesson')->insert([
            'lesson_topic' => 'Hukum Dalton',
            'lesson_level' => "Level 3",
            'lesson_description' => 'Jika ada dua senyawa yang dibentuk dari dua unsur yang sama dan massa
            satu unsur pada kedua senyawa itu sama maka massa unsur yang lainnya
            mempunyai angka perbandingan yang sederhana dan bulat.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_lesson')->insert([
            'lesson_topic' => 'Hukum Gay Lussac',
            'lesson_level' => "Level 4",
            'lesson_description' => 'Pada temperatur dan tekanan yang sama, perbandingan volum gas-gas yang
            bereaksi dan gas hasil reaksi merupakan bilangan bulat dan sederhana.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('kim10_lesson')->insert([
            'lesson_topic' => 'Hukum Avogadro',
            'lesson_level' => "Level 5",
            'lesson_description' => 'Pada temperatur dan tekanan yang sama, semua gas pada volum yang
            sama mengandung jumlah molekul yang sama pula.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
