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
            $table->string('category')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();;  
            $table->decimal('long', 10, 7)->nullable();;
            $table->decimal('lat', 10, 7)->nullable();;
            $table->text('description')->nullable();
            $table->string('url')->nullable();
            $table->string('imageUrl')->nullable();
            $table->timestamps();
        });
    }

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
