<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson', function (Blueprint $table) {
            $table->string('lesson_id');
            $table->string('lesson_topic');
            $table->string('lesson_level');
            $table->string('lesson_image');
            $table->string('lesson_description');
            $table->timestamps();
        });

        Schema::table('lesson', function (Blueprint $table) {
            //
            $table->primary('lesson_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lesson');
    }
}