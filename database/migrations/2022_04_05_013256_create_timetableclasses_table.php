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
            $table->integer('user_id');
            $table->string('cours_id');
            $table->string('locaton');
            $table->string('cours_date');
            $table->string('cours_time');
            $table->string('cours_clossing_time');
            $table->string('teacher_id');
            $table->string('semester');
            $table->string('level');
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
        Schema::dropIfExists('timetableclasses');
    }
}
