<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequiredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requireds', function (Blueprint $table) {
            $table->foreignId('piece')->references('piece')->on('pieces');
            $table->foreignId('material')->references('material')->on('materials');
            $table->integer('pcs');
            $table->primary(['piece','material']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requireds');
    }
}
