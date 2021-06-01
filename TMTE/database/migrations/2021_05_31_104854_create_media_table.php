<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table ->string('mediaName');
            $table ->string('studioName');
            $table ->string('rating');
            $table ->string('kid');
            $table ->string('plot');
            $table ->string('actor');
            $table ->string('date');
            $table ->string('director');
            $table ->string('scriptwriter');
            $table ->string('creator');
            $table ->string('mediaType');
            $table ->time('mediaTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
