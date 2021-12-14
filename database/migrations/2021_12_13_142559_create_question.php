<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->string('exercise_id');
            $table->string('question_topic');
            $table->string('question_description');
            $table->string('qchoice1');
            $table->string('qchoice2');
            $table->string('qchoice3');
            $table->string('qchoice4');
            $table->string('qimage');
            $table->string('correctanswer');
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
        Schema::dropIfExists('question');
    }
}
