<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchooleventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schoolevents', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('event_location');
            $table->string('event_img')->nullable();
            $table->longText('event_description')->nullable();
            $table->string('event_date');
            $table->string('event_time');
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
        Schema::dropIfExists('schoolevents');
    }
}
