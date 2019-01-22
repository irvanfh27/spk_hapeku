<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('color')->insert([
            'name' => 'Red',
            'score' => 1,
        ]);

        DB::table('color')->insert([
            'name' => 'Rose Gold',
            'score' => 3,
        ]);

        DB::table('color')->insert([
            'name' => 'Blue',
            'score' => 2,
        ]);

        DB::table('color')->insert([
            'name' => 'Pink',
            'score' => 4,
        ]);
    }
}
