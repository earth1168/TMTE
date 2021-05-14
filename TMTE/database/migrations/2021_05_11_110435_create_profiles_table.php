<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->unsignedBigInteger('userID');
            $table->string('profileName');
            $table->boolean('playNext')->default(1);
            $table->boolean('playTrailer')->default(1);
            $table->boolean('kidUser')->default(0);
            $table->string('language');
            $table->timestamps();

            $table->primary(['id', 'userID']);
            $table->foreign('userID')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
        });

        DB::statement('ALTER TABLE profiles MODIFY id INTEGER NOT NULL AUTO_INCREMENT');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
