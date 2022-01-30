<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('build_id',50);
            $table->integer("level_no");
            $table->integer("room_no");
            $table->integer("max_size");
            $table->text("remark");
            $table->string('room_name',50);
            $table->string('room_type',30);
            $table->integer('room_duration');
            $table->integer('frequency')->default(0);
            $table->boolean("status");
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
