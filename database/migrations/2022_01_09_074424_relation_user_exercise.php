<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationUserExercise extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kim10_exercisescore', function (Blueprint $table) {
            //
            $table->foreign('exercise_id')
                ->references('id')->on('kim10_exercise')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('kim10_exercisescore', function (Blueprint $table) {
            //
            $table->foreign('user_id')
                ->references('id')->on('students')
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
        //
    }
}
