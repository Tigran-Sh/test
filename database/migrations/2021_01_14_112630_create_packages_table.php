<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_type_id');
            $table->unsignedBigInteger('hotel_id')->nullable();
            $table->unsignedBigInteger('meeting_room_id')->nullable();
            $table->timestamps();

            $table->foreign('package_type_id')->on('package_types')->references('id');
            $table->foreign('hotel_id')->on('hotels')->references('id');
            $table->foreign('meeting_room_id')->on('meeting_rooms')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
