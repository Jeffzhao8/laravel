<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_delivery', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('leaveCountry');
            $table->string('leaveCity');
            $table->string('arriveCountry');
            $table->string('arriveCity');
            $table->string('leaveDate');
            $table->string('arriveDate');
            $table->string('email');
            $table->string('mobile');
            $table->string('description');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('do_delivery');
    }
}
