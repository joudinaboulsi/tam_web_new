<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subtitle')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('image')->nullable();
            $table->string('alt_image')->nullable();
            $table->string('counter1')->nullable();
            $table->string('p1')->nullable();
            $table->string('counter2')->nullable();
            $table->string('p2')->nullable();
            $table->string('counter3')->nullable();
            $table->string('p3')->nullable();
            $table->string('counter4')->nullable();
            $table->string('p4')->nullable();
            $table->string('counter5')->nullable();
            $table->string('p5')->nullable();

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
        Schema::dropIfExists('visions');
    }
}
