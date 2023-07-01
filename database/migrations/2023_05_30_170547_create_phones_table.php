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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('color');
            $table->string('storage');
            $table->string('ram');
            $table->string('chip');
            $table->string('screen');
            $table->string('camera');
            $table->string('camera2');
            $table->string('battery');
            $table->string('battery_type');
            $table->string('resolution');
            $table->string('category');
            $table->string('promotion');
            $table->string('image');
            $table->string('brand');
            $table->timestamps();
            $table->integer('viewer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
};
