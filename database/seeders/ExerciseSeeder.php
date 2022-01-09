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
            'exercise_image' => 'exercise_image/lavoisier.jpg',
            'exercise_description' => 'Setelah belajar mengenai Hukum Lavoisier, saatnya untuk mengerjakan quiz. Terdapat 10 soal dengan maksimal nilai 100. Semangat!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 2 Proust
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 2,
            'exercise_image' => 'exercise_image/proust.jpg',
            'exercise_description' => 'Setelah belajar mengenai Hukum Proust, saatnya untuk mengerjakan quiz. Terdapat 10 soal dengan maksimal nilai 100. Semangat!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 3 Dalton
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 3,
            'exercise_image' => 'exercise_image/john_dalton.jpg',
            'exercise_description' => 'Setelah belajar mengenai Hukum Dalton, saatnya untuk mengerjakan quiz. Terdapat 10 soal dengan maksimal nilai 100. Semangat!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 4 Gay Lussac
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 4,
            'exercise_image' => 'exercise_image/gay_lussac.jpg',
            'exercise_description' => 'Setelah belajar mengenai Hukum Gay Lussac, saatnya untuk mengerjakan quiz. Terdapat 10 soal dengan maksimal nilai 100. Semangat!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 5 Avogadro
        DB::table('kim10_exercise')->insert([
            'lesson_id' => 5,
            'exercise_image' => 'exercise_image/avogadro.jpg',
            'exercise_description' => 'Setelah belajar mengenai Hukum Avogadro, saatnya untuk mengerjakan quiz. Terdapat 10 soal dengan maksimal nilai 100. Semangat!',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
