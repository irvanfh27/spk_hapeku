<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ram', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('size');
            $table->float('score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('ram');
    }
}
