<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('pdf')->nullable();
            $table->string('image1')->nullable();
            $table->string('alt_image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('alt_image2')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
