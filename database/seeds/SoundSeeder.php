<?php

use Illuminate\Database\Seeder;

class SoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sounds')->insert([
            'name' => 'Dolby',
            'score' => 4,
        ]);

        DB::table('sounds')->insert([
            'name' => 'Sony',
            'score' => 2,
        ]);

        DB::table('sounds')->insert([
            'name' => 'Samsung',
            'score' => 2,
        ]);
    }
}
