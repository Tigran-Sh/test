<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->smallInteger('available_single_rooms')->unsigned()->nullable()->after('max_room');
            $table->smallInteger('available_double_rooms')->unsigned()->nullable()->after('available_single_rooms');
            $table->smallInteger('guest_count')->unsigned()->nullable()->after('available_double_rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('available_single_rooms');
            $table->dropColumn('available_double_rooms');
            $table->dropColumn('guest_count');
        });
    }
}
