<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePéldániesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('példánies', function (Blueprint $table) {
            $table->foreignId('kellék')->references('kellék')->on('kelléks');
            $table->increments('sorszám');
            $table->primary(['kellék', 'sorszám']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('példánies');
    }
}
