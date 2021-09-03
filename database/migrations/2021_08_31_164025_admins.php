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
            $table->string("email",50);
            $table->string("password",50);
            $table->string("provider")->default("");
        });
        /*
        ** Insert admin email and password **
        ** Add your email and password here before migrate the table **
        */
        DB::table('admins')->insert(
            array(
                'email' => 'abc@test.com',
                'password' => '123'
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
