<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * Crea la tabla products con los siguientes campos y sus repectivos tipos
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name');
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
        Schema::drop('products');
    }
}
