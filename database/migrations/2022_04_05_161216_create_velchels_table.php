<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVelchelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('velchels', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('car_number');
            $table->string('car_image');
            $table->string('purchest_date');
            $table->string('purchest_amount');
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
        Schema::dropIfExists('velchels');
    }
}
