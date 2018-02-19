<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
    }

        //     Schema::create('venues', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('venuename');
        //     $table->string('venuetype');
        //     $table->string('email');
        //     $table->string('phonenumber');
        //     $table->string('county');
        //     $table->string('address');
        //     $table->integer('capacity');
        //     $table->boolean('overnightrooms');
        //     $table->boolean('pool');
        //     $table->boolean('outdoorspace');
        //     $table->boolean('petfriendly');
        //     $table->boolean('rooftop');
        //     $table->boolean('wifi');
        //     $table->boolean('foodinhouse');
        //     $table->boolean('outsidecatering');
        //     $table->timestamps();
        // });

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('venues');
    }
}
