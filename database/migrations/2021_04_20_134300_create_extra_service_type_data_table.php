<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraServiceTypeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_service_type_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('extra_service_type_id');
            $table->char('lang', 2);
            $table->text('name')->nullable();
            $table->timestamps();

            $table->foreign('extra_service_type_id')->on('extra_service_types')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_service_type_data');
    }
}
