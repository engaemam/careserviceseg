<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrsNewsInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_info', function (Blueprint $table) {
                $table->bigIncrements('id');             
                $table->string('title');
                $table->string('body');
                $table->string('lang');
                $table->string('img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news_info', function (Blueprint $table) {
            //
        });
    }
}
