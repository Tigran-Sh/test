<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id');
            $table->char('lang', 2);
            $table->text('name')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('package_id')->on('packages')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_data');
    }
}
