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
        DB::table('lesson')->insert([
            'lesson_id' => 'KIM1',
            'lesson_topic' => 'Hukum Dalton',
            'lesson_level' => "Level 1",
            'lesson_image' => 'Dalton',
            'lesson_description' => 'Lorem Ipsum',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('lesson')->insert([
            'lesson_id' => 'KIM2',
            'lesson_topic' => 'Hukum Proust',
            'lesson_level' => "Level 2",
            'lesson_image' => 'Proust',
            'lesson_description' => 'Lorem Ipsum',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
