<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('listId');
            $table ->Integer('profileID');
            $table ->Integer('mediaID');
            $table ->smallInteger('status');
            $table ->smallInteger('like');
            $table ->smallInteger('myList');
            $table ->string('subtitleSelect');
            $table ->string('soundTrackSelect');
            $table ->time('RemainingTime')->default("00:00:00");

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
        Schema::dropIfExists('media_logs');
    }
}
