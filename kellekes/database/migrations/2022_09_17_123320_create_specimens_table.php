<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specimens', function (Blueprint $table) {
            $table->foreignId('material')->references('material')->on('materials');
            $table->integer('ser_num');
            $table->integer('counter');
            $table->primary(['material', 'ser_num']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specimens');
    }
}
