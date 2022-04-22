<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id');
            $table->integer('user_id');
            $table->string('full_name');
            $table->string('teacher_email');
            $table->string('teacher_number');
            $table->string('qualification');
            $table->string('country');
            $table->string('address');
            $table->string('teacher_dob');
            $table->string('profil_p');
            $table->string('user_code')->unique();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     *
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
