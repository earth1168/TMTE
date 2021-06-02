<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTempNotiContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_noti_contents', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('head');
            $table->string('text');
            $table->timestamps();
            
            $table->primary('id');
            
        });
        DB::statement('ALTER TABLE temp_noti_contents MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_noti_contents');
    }
}
