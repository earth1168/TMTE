<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenseDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('license_details', function (Blueprint $table) {
                $table->id();
                $table->date('expiredDate');
                $table->unsignedBigInteger('countryID');
                $table->foreign('countryID')->references('id')->on('country')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('license_detail');
        Schema::dropIfExists('license_details');
    }
}
