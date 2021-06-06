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
            $table->id();
            $table ->Integer('profileID');
            $table ->unsignedBigInteger('mediaID');
            $table ->smallInteger('status') -> default(0);
            $table ->smallInteger('like')-> default(0);
            $table ->smallInteger('myList')-> default(0);
            $table ->string('subtitleSelect');
            $table ->string('soundTrackSelect');
            $table ->time('RemainingTime')->default("00:00:00");

            $table->timestamps();

            $table->foreign('profileID')->references('id')->on('profiles') -> onDelete('cascade');
            $table->foreign('mediaID')->references('id')->on('media') -> onDelete('cascade');
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
