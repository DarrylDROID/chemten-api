<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise', function (Blueprint $table) {
            $table->string('exercise_id');
            $table->string('exercise_topic');
            $table->string('exercise_level');
            $table->string('exercise_image');
            $table->string('exercise_description');
            $table->timestamps();
        });

        Schema::table('exercise', function (Blueprint $table) {
            //
            $table->primary('exercise_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise');
    }
}
