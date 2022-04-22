<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stafs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('staf_id');
            $table->string('staf_name');
            $table->string('staf_position');
            $table->string('staf_quote');
            $table->string('staf_email');
            $table->string('staf_number');
            $table->string('qualification');
            $table->string('address');
            $table->string('country');
            $table->string('Staf_dob');
            $table->string('profil_p');
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
        Schema::dropIfExists('stafs');
    }
}
