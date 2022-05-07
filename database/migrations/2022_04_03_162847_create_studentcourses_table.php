<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentcourses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->integer('admin_id');
            $table->integer('student_id');
            $table->integer('semester_id');
            $table->integer('level_id');

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
        Schema::dropIfExists('studentcourses');
    }
}
