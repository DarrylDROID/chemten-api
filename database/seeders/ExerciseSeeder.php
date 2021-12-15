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
            'exercise_image' => 'Photo',
            'exercise_description' => 'Score',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 2 Proust
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Proust',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Score',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 3 Dalton
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Dalton',
            'exercise_level' => "Level 3",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Score',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 4 Gay Lussac
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Gay Lussac',
            'exercise_level' => "Level 4",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Score',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // Level 5 Avogadro
        DB::table('kim10_exercise')->insert([
            'exercise_topic' => 'Hukum Avogadro',
            'exercise_level' => "Level 5",
            'exercise_image' => 'Photo',
            'exercise_description' => 'Score',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
