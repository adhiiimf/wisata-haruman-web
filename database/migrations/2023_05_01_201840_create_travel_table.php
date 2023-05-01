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
        Schema::create('travel', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('travelTitle');
            $table->string('travelImg-1');
            $table->string('travelImg-2');
            $table->string('travelImg-3');
            $table->string('description');
            $table->string('phoneNumber');
            $table->unsignedBigInteger('admins_id');
            $table->foreign('admins_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('travel');
    }
};
