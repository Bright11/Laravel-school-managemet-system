<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('0');
            $table->string('position');
            $table->string('status')->default('pending');
            $table->string('user_code')->unique()->nullable();
            $table->string('reset_p_code')->nullable();
            $table->string('qualification');
            $table->string('country');
            $table->string('address');
            $table->string('dob');
            $table->string('description')->nullable();
            $table->string('number');
            $table->string('profil_p')->nullable();
            $table->string('complete')->default('not yet')->nullable();
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
        Schema::dropIfExists('users');
    }
}
