<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chatdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatdata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("sender_id");
            $table->integer("reciver_id");
            $table->text("message");
            $table->dateTime("time_send");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
