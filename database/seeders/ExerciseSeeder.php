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
            'exercise_topic' => 'Hukum Lavoisier',
            'exercise_level' => "Level 1",
            'exercise_image' => 'exercise_image/WGNzX6uIgaBrac4rXr8IXAkX3DWSyQcSQAtbfnWF.jpg',
            'exercise_description' => 'Antoine-Laurent de Lavoisier adalah orang yang memberikan nama kepada oksigen pada tahun 1774. Perkataan oksigen terdiri dari dua kata Yunani, oxus dan gennan.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 2 Proust
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'exercise_image/DIIBBclattig9BaKFmwD75wI6rGW9zG0lto05oLG.jpg',
            'exercise_description' => 'Joseph Louis Proust adalah seorang aktor dan kimiawan Prancis. Ia paling dikenal karena menemukan hukum komposisi konstan pada 1799.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 3 Dalton
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'exercise_image/t2LrJ8m2i0eK3BspBsHtcWBXE10bWfvu9zR2e0FS.jpg',
            'exercise_description' => 'John Dalton FRS adalah seorang ahli kimia, ahli fisika, dan ahli meteorologi Inggris. Dia terkenal karena memperkenalkan teori atom ke dalam kimia, dan untuk penelitiannya tentang buta warna, kadang-kadang disebut sebagai Daltonisme untuk menghormatinya.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 4 Gay Lussac
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'exercise_image/dB5Poo8aJRegy7iyPeWKP70qluU2qDQUfxyDxdsv.jpg',
            'exercise_description' => 'Hukum Gay-Lussac dapat merujuk kepada salah satu dari dua hukum kimia yang dikemukakan oleh kimiawan Prancis Joseph Louis Gay-Lussac. Keduanya berhubungan dengan sifat-sifat gas.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 5 Avogadro
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'exercise_image/1YYVdnC5f9zMM78U2dnqxYbQ4OlxoJ3PWhyo2hNr.jpg',
            'exercise_description' => 'Hukum Avogadro adalah suatu hukum gas eksperimen yang mengaitkan volume gas dengan jumlah zat gas tersebut. Hukum ini merupakan kasus hukum gas ideal yang spesifik',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
