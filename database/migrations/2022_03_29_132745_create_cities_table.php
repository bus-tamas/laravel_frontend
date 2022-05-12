<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('airline_city', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airline_id');
            $table->unsignedBigInteger('city_id');
            $table->timestamps();

            $table->foreign('airline_id')->on('airlines')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('city_id')->on('cities')->references('id')->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['airline_id', 'city_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('airline_city');

        Schema::dropIfExists('cities');
    }
}
