<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSzükségesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('szükséges', function (Blueprint $table) {
            $table->foreignId('darab')->references('darab')->on('darabs');
            $table->foreignId('kellék')->references('kellék')->on('kelléks');
            $table->int('hány');
            $table->primary(['darab','kellék']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('szükséges');
    }
}
