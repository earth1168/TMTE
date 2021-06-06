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
                $table->string('country');
           
        });

        Schema::table('license_log', function (Blueprint $table) {
            $table->foreign('licenseID')
            ->references('id')
            ->on('license_details')
            ->onDelete('cascade');
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
