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
        Schema::create('articles', function (Blueprint $table) {
            
            $table->uuid('id')->primary();
            $table->string('articleTitle');
            $table->string('articleImage');
            $table->string('content');
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
        Schema::dropIfExists('articles');
    }
};
