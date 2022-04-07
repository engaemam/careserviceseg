<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApplyFormInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('crs_name');
            $table->string('crs_mobile');
            $table->string('crs_email');
            $table->longText('crs_message');
            $table->string('resume');
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
        Schema::table('apply_info', function (Blueprint $table) {
            //
        });
    }
}
