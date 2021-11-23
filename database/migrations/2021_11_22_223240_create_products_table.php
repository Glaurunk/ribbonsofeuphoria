<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('categoryId');
            $table->double('price',5,2);
            $table->string('images')->nullable();
            $table->double('new_price',5,2)->nullable();
            
            $table->enum('availability',['available','limited','out_of_stock'])->default('available');
            $table->boolean('featured')->default(false);
            $table->tinyInteger('status')->default(1);

            $table->string('other')->nullable()->default(null);
            $table->string('misc')->nullable()->default(null);

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
        Schema::dropIfExists('products');
    }
}
