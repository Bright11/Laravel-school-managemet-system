<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToturialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toturials', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id');
            $table->integer('course_id');
            $table->integer('semester_id');
            $table->integer('level_id');
            $table->string('subject');
            $table->string('picture');
            $table->string('video')->nullable();
            $table->string('notes')->nullable();
            $table->longText('description');
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
        Schema::dropIfExists('toturials');
    }
}
