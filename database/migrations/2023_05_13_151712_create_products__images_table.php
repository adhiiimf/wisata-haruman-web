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
        Schema::create('products__images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_url');
            $table->string('admins_id');
            $table->foreign('admins_id')->references('id')->on('admins')->onUpdate('cascade')->onDelete('cascade');
            $table->string('products_id');
            $table->foreign('products_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('products_images');
        Schema::dropIfExists('products__images');
    }
};
