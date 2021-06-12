<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingRoomDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meeting_room_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meeting_room_id');
            $table->char('lang', 2);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('meeting_room_id')->on('meeting_rooms')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meeting_room_data');
    }
}
