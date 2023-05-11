<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('travelTitle');
            $table->string('travelImage');
            $table->longText('description');
            $table->string('phoneNumber');
            $table->string('admins_id');
            $table->foreign('admins_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');     
            $table->string('travel_schedules_id');
            $table->foreign('travel_schedules_id')->references('id')->on('travel_schedules')->cascadeOnUpdate()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels');
    }
};
