<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('student_id');
            $table->string('full_name');
            $table->string('student_email');
            $table->string('student_number');
            $table->string('qualification');
            $table->string('country');
            $table->string('address');
            $table->string('student_dob');
            $table->string('profil_p')->nullable();
            $table->string('user_code')->unique();
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('student_id')->references('id')
            ->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
