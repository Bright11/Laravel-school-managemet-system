<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolcourses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cours_name');
            $table->unsignedInteger('admin_id');
            $table->string('cours_img');
            $table->longText('cours_description');
            $table->integer('price');
            $table->foreign('admin_id')->references('id')->on('users');
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
        Schema::dropIfExists('schoolcourses');
    }
}
