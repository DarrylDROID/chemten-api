<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuizAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kim10_quizanswer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('question_id');
            $table->string('hasil');
            $table->timestamps();
        });

        Schema::table('kim10_quizanswer', function (Blueprint $table) {
            $table->foreign('student_id')
            ->references('id')->on('students')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('question_id')
            ->references('id')->on('kim10_question')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_quiz_answer');
    }
}
