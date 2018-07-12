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
            $table->integer('user_id');
            $table->string('venue_name');
            $table->string('contact')->nullable(); 
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->decimal('location_lng', 10, 7)->nullable();
            $table->decimal('location_lat', 10, 7)->nullable();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('second_image')->nullable();
            $table->string('third_image')->nullable();
            $table->longText('basic_info');
            $table->string('features')->nullable();
            $table->longText('fee_info')->nullable();
            $table->longText('booking_info')->nullable();
            $table->timestamps();
        });
    }
// contact
// basic_info
// features
// fee_info
// booking_info
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
