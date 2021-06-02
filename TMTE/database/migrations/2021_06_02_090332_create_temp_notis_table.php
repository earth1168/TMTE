<?php

use App\Models\temp_notiContent;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempNotisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_notis', function (Blueprint $table) {
            $table->id();
            $table->integer('profileID');
            $table->integer('notiID');
            $table->tinyInteger('seen') -> default(0);
            $table->timestamps();

            $table->foreign('profileID')
            ->references('id')
            ->on('profiles');

            $table->foreign('notiID')
            ->references('id')
            ->on('temp_noti_contents');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_notis');
    }
}
