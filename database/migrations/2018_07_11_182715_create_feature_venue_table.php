<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_venue', function (Blueprint $table) {
            $table->integer('feature_id');
            $table->integer('venue_id');
            $table->primary(['feature_id','venue_id']);
            // foreign key constraints are optional (but pretty useful, especially with cascade delete
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('feature_id')->references('id')->on('features')->onDelete('cascade');
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
        Schema::dropIfExists('feature_venue');
    }
}
