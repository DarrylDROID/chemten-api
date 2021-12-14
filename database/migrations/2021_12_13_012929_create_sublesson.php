<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSublesson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sublesson', function (Blueprint $table) {
            $table->id();
            $table->string('lesson_id');
            $table->string('sublesson_topic');
            $table->string('sublesson_image');
            $table->string('sublesson_description');
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
        Schema::dropIfExists('sublesson');
    }
}
