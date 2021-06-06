<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_log', function (Blueprint $table) {
                
            $table->id();
            $table->unsignedBigInteger('mediaID');
            $table->unsignedBigInteger('licenseID');
            $table->foreign('mediaID')->references('id')->on('media')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('license_log');
    }
}
