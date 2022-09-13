<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElőadásTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('előadás', function (Blueprint $table) {
            $table->date('kelt');
            $table->time('kezdet');
            $table->foreignId('darab')->references('darab')->on('darabs');
            $table->primary(['kelt', 'kezdet']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('előadás');
    }
}
