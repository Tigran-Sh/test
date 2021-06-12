<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string('address')->nullable();
            $table->double('start_longitude')->nullable();
            $table->double('end_longitude')->nullable();
            $table->double('start_latitude')->nullable();
            $table->double('end_latitude')->nullable();
            $table->unsignedInteger('minimum')->nullable();
            $table->unsignedInteger('maximum')->nullable();
            $table->unsignedBigInteger('extra_service_type_id');
            $table->double('price_per_km');
            $table->unsignedInteger('car_size');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('destination_id');
            $table->timestamps();

            $table->foreign('extra_service_type_id')->on('extra_service_types')->references('id');
            $table->foreign('destination_id')->on('destinations')->references('id');
            $table->foreign('user_id')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfers');
    }
}
