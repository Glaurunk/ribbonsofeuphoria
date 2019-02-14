<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCarouseltoPhotos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('photos', function (Blueprint $table) {
          $table->string('url');
          $table->boolean('carousel')->default(0);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('photos', function (Blueprint $table) {
        $table->dropColumn('url');
        $table->dropColumn('carousel');
      });
    }
}
