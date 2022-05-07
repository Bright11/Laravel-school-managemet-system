<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course');
            $table->string('subject');
            $table->unsignedInteger('student_id');
            $table->unsignedInteger('user_code');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('teacer_id');
            $table->string('student_scores');
            $table->longText('teacher_description');
            $table->timestamps();
            $table->foreign('student_id')->references('id')->on('students')
            ->onDelete('cascade');
            $table->foreign('teacer_id')->references('id')->on('teachers');
            $table->foreign('user_code')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('student_results');
    }
}
