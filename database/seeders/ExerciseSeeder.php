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
        //
        DB::table('exercise')->insert([
            'exercise_id' => 'Soal1',
            'exercise_topic' => 'Perbandingan Massa',
            'exercise_level' => "Level 1",
            'exercise_image' => 'Gay Lussac',
            'exercise_description' => 'Lorem Ipsum',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('exercise')->insert([
            'exercise_id' => 'Soal2',
            'exercise_topic' => 'Kekekalan Massa',
            'exercise_level' => "Level 2",
            'exercise_image' => 'Proust',
            'exercise_description' => 'Lorem Ipsum',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
