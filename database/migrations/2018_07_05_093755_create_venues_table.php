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
            $table->string('name');
            $table->string('contact'); 
            $table->string('city');
            $table->string('address')->nullable();
            $table->decimal('location_lng', 10, 7)->nullable();
            $table->decimal('location_lat', 10, 7)->nullable();
            $table->longText('description')->nullable();
            $table->string('images')->nullable();
            $table->string('imageUrl')->nullable();
            $table->longText('basic_info');s
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
