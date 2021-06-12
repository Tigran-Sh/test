<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTypeDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_type_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_type_id');
            $table->char('lang', 2);
            $table->text('name')->nullable();
            $table->timestamps();

            $table->foreign('package_type_id')->on('package_types')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_type_data');
    }
}
