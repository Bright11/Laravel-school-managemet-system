<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMypaidvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypaidvideos', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("owner_id");
            $table->integer("video_id");
            $table->string("video");
            $table->string("paid_amaunt");
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
        Schema::dropIfExists('mypaidvideos');
    }
}