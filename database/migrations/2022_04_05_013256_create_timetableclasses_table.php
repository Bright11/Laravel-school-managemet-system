<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetableclassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetableclasses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('cours_id');
            $table->string('locaton');
            $table->string('cours_date');
            $table->string('cours_time');
            $table->string('cours_clossing_time');
            $table->unsignedInteger('teacher_id');
            $table->string('semester');
            $table->string('level');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('cours_id')->references('id')->on('schoolcourses')
            ->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')
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
        Schema::dropIfExists('timetableclasses');
    }
}
