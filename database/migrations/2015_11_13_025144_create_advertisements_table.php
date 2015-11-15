<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la tabla advertisements con los siguientes campos y sus repectivos tipos
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img_url');
            $table->string('description');
            $table->string('enabled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Hace el drop table
     * @return void
     */
    public function down()
    {
        Schema::drop('advertisements');
    }
}
