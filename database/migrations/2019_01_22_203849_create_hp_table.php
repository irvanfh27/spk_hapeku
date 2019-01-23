<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHpTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('hp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->binary('gambar')->nullable();
            $table->float('harga', 200)->nullable();
            $table->unsignedInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');

            $table->unsignedInteger('id_ram')->nullable();
            $table->foreign('id_ram')->references('id')->on('ram');

            $table->unsignedInteger('id_storage')->nullable();
            $table->foreign('id_storage')->references('id')->on('storage');

            $table->unsignedInteger('id_camera')->nullable();
            $table->foreign('id_camera')->references('id')->on('camera');

            $table->unsignedInteger('id_color')->nullable();
            $table->foreign('id_color')->references('id')->on('color');

            $table->unsignedInteger('id_battery')->nullable();
            $table->foreign('id_battery')->references('id')->on('battery');

            $table->unsignedInteger('id_size')->nullable();
            $table->foreign('id_size')->references('id')->on('sizes');

            $table->unsignedInteger('id_sound')->nullable();
            $table->foreign('id_sound')->references('id')->on('sounds');

            $table->unsignedInteger('id_dualsim')->nullable();
            $table->foreign('id_dualsim')->references('id')->on('dual_sims');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('hp');
    }
}
