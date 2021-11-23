<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_product', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('dimension_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('dimension_id')->references('id')->on('dimensions');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_dimension');
    }
}
