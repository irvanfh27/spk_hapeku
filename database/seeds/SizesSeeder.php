<?php

use Illuminate\Database\Seeder;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sizes')->insert([
            'size' => 5,
            'score' => 1,
        ]);

        DB::table('sizes')->insert([
            'size' => 5.5,
            'score' => 1.5,
        ]);

        DB::table('sizes')->insert([
            'size' => 5.9,
            'score' => 1.9,
        ]);

        DB::table('sizes')->insert([
            'size' => 6,
            'score' => 2,
        ]);
        DB::table('sizes')->insert([
            'size' => 6.3,
            'score' => 2.5,
        ]);
    }
}
