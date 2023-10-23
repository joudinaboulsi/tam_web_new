<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_mission')->nullable();
            $table->string('title_vision')->nullable();
            $table->string('btn_text')->nullable();
            $table->string('scrollTo')->nullable();
            $table->text('text')->nullable();
            $table->string('image')->nullable();
            $table->string('title1')->nullable();
            $table->text('p1')->nullable();
            $table->string('title2')->nullable();
            $table->text('p2')->nullable();
            $table->string('title3')->nullable();
            $table->text('p3')->nullable();
            $table->string('title4')->nullable();
            $table->text('p4')->nullable();
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
        Schema::dropIfExists('missions');
    }
}
