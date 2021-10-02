<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->string("staff_id");
            $table->string("password");
        });

        /*
        ** Insert staff ID and password **
        ** Add your email and password here before migrate the table **
        */

        DB::table('staffs')->insert(
            array(
                'staff_id' => 'staff1',
                'password' => '123'
            )
        );
        DB::table('staffs')->insert(
            array(
                'staff_id' => 'staff2',
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
        Schema::dropIfExists('staffs');
    }
}
