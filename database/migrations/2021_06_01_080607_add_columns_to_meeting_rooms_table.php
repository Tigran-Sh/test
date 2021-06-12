<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToMeetingRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meeting_rooms', function (Blueprint $table) {
            $table->dropColumn('size');
            $table->unsignedInteger('min')->unique()->after('hotel_id')->nullable();
            $table->unsignedInteger('max')->unique()->after('min')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meeting_rooms', function (Blueprint $table) {
            $table->string('size');
            $table->dropColumn('min');
            $table->dropColumn('max');
        });
    }
}
