<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestpostsTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la tabla testposts con los siguientes campos y sus repectivos tipos
     * @return void
     */
    public function up()
    {
        Schema::create('testposts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
            $table->string('img_url');
            $table->string('description');
            $table->string('vippost');
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
        Schema::drop('testposts');
    }
}
