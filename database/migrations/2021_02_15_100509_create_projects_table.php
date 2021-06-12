<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('destination_id');
            $table->unsignedBigInteger('package_id');
            $table->unsignedBigInteger('member_count');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->double('price');
            $table->string('status')->default(\App\Models\Project::STATUS_PENDING);
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('id');
            $table->foreign('destination_id')->on('destinations')->references('id');
            $table->foreign('package_id')->on('packages')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
