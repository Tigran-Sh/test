<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToExtraServiceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('extra_service_data', function (Blueprint $table) {
            $table->text('cancellation')->after('description')->nullable();
            $table->text('payment_conditions')->after('cancellation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('extra_service_data', function (Blueprint $table) {
            $table->dropColumn('cancellation');
            $table->dropColumn('payment_conditions');
        });
    }
}
