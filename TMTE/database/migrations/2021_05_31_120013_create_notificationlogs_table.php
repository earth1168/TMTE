<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateNotificationlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificationlogs', function (Blueprint $table) {
            $table -> id();
            $table -> Integer('profileID');
            $table -> unsignedBigInteger('NotiID');
            $table -> tinyInteger('seen');
            $table->timestamps();
            $table->foreign('NotiID')->references('id')->on('notifications');
            $table->foreign('profileID')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificationlogs');
    }
}
