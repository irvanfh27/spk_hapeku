<?php

use Illuminate\Database\Migrations\Migration;

class AddMerkHp extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('hp', function ($table) {
            $table->enum('merk', ['Samsung', 'LG', 'Vivo', 'OnePlus', 'Xiaomi', 'Oppo', 'Sony', 'Asus']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
    }
}
