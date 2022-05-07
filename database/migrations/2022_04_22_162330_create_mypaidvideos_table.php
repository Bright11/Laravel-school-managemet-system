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
            $table->increments('id');
            //$table->increments('id');
            $table->string('Video_name');
            $table->unsignedInteger("owner_id");
            $table->unsignedInteger("video_id");
            $table->integer("user_id");
            $table->string('PayerID')->nullable();
            $table->string('Video_img');
            $table->string("video");
            $table->string("paid_amaunt");
            $table->string('status');
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('users')
            ->onDelete('cascade');
            $table->foreign('video_id')->references('id')->on('onlinecours');
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
