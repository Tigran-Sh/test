<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->char('lang', 2);
            $table->string('name')->nullable();
            $table->string('slogan')->nullable();
            $table->string('dress_code')->nullable();
            $table->string('team_proven')->nullable();
            $table->text('details')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('service_id')->on('services')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_data');
    }
}
