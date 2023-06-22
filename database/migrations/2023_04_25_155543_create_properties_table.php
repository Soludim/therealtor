<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->longText('description');
            $table->string('take_tour_video');
            $table->double('price');

            $table->foreign('type_id')->references('id')->on('prop_types');
            $table->foreign('status_id')->references('id')->on('prop_status');
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
        Schema::dropIfExists('properties');
    }
}
