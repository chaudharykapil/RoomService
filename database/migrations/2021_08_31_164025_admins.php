<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string("userid",50);
            $table->string("password",50);
        });
        /*
        ** Insert admin email and password **
        ** Add your email and password here before migrate the table **
        */
        DB::table('admins')->insert(
            array(
                'userid' => 'admin1',
                'password' => '123'
            )
        );
        DB::table('admins')->insert(
            array(
                'userid' => 'admin2',
                'password' => '789'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
