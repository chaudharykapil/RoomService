<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestedRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requested_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer("room_id");
            $table->integer("booking_detail_id");
            $table->date("requested_date");
            $table->time("time_from");
            $table->time("time_to");
            $table->integer("requested_size");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requested_rooms');
    }
}
