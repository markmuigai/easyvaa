<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_venue', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('venue_id');
            $table->primary(['category_id', 'venue_id']);
            // foreign key constraints are optional (but pretty useful, especially with cascade delete
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('category_venue');
    }
}
