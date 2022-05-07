<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

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
            $table->increments('id');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('staf_id');
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
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('staf_id')->references('id')->on('users');
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
