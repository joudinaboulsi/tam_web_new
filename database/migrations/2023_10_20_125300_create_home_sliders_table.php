<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image_slider')->nullable();
            $table->string('title_main')->nullable();
            $table->string('text_main')->nullable();
            $table->string('text_btn')->nullable();
            $table->string('scrollTo')->nullable();
            $table->string('alt_image')->nullable();

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
        Schema::dropIfExists('home_sliders');
    }
}
