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
        Schema::create('kim10_exercise', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lesson_id');            
            $table->string('exercise_image');
            $table->string('exercise_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kim10_exercise');
    }
}
