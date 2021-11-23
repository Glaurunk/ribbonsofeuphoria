<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice')->nullable();
            $table->text('comments')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->enum('post',['normal','express','abroad'])->default('normal');
            $table->date('placed_on');
            $table->boolean('email_confirmed')->default(false);
            $table->enum('status',['pending','approved','sent','canceled'])->default('pending');
            $table->date('sent_on')->nullable();
            $table->boolean('archived')->default(false);
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
        Schema::dropIfExists('orders');
    }
}
