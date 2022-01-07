<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Level 1 Lavoisier
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 1,
            'exercise_image' => 'lavoisier.jpg',
            'exercise_description' => 'Antoine-Laurent de Lavoisier adalah orang yang memberikan nama kepada oksigen pada tahun 1774. Perkataan oksigen terdiri dari dua kata Yunani, oxus dan gennan.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 2 Proust
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 2,
            'exercise_image' => 'proust.jpg',
            'exercise_description' => 'Joseph Louis Proust adalah seorang aktor dan kimiawan Prancis. Ia paling dikenal karena menemukan hukum komposisi konstan pada 1799.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 3 Dalton
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 3,
            'exercise_image' => 'john_dalton.jpg',
            'exercise_description' => 'John Dalton FRS adalah seorang ahli kimia, ahli fisika, dan ahli meteorologi Inggris. Dia terkenal karena memperkenalkan teori atom ke dalam kimia, dan untuk penelitiannya tentang buta warna, kadang-kadang disebut sebagai Daltonisme untuk menghormatinya.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 4 Gay Lussac
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 4,
            'exercise_image' => 'gay_lussac.jpg',
            'exercise_description' => 'Hukum Gay-Lussac dapat merujuk kepada salah satu dari dua hukum kimia yang dikemukakan oleh kimiawan Prancis Joseph Louis Gay-Lussac. Keduanya berhubungan dengan sifat-sifat gas.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 5 Avogadro
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 5,
            'exercise_image' => 'avogadro.jpg',
            'exercise_description' => 'Hukum Avogadro adalah suatu hukum gas eksperimen yang mengaitkan volume gas dengan jumlah zat gas tersebut. Hukum ini merupakan kasus hukum gas ideal yang spesifik',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
