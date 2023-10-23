<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo')->nullable();
            $table->string('alt_logo')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('whatsaplink')->nullable();
            $table->string('address')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('tel_href')->nullable();
            $table->text('map')->nullable();
            $table->string('contact_header')->nullable();
            $table->string('scrollTo')->nullable();
            $table->string('tel')->nullable();
            $table->string('title_header')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
