<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la tabla messages con los siguientes campos y sus repectivos tipos
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('message');
            $table->string('seen');
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
        Schema::drop('messages');
    }
}
