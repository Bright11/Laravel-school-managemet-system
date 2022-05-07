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
            $table->increments('id');
            $table->unsignedInteger('teacher_id');
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('semester_id');
            $table->unsignedInteger('level_id');
            $table->string('subject');
            $table->string('picture');
            $table->string('video')->nullable();
            $table->string('notes')->nullable();
            $table->longText('description');
            $table->timestamps();
            $table->foreign('teacher_id')->references('id')->on('teachers')
            ->onDelete('cascade');
            $table->foreign('semester_id')->references('semesertid')->on('semesters');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('course_id')->references('id')->on('schoolcourses')
            ->onDelete('cascade');
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
