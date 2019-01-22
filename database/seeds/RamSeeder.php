<?php

use Illuminate\Database\Seeder;

class RamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('ram')->insert([
            'size' => 2,
            'score' => 1,
        ]);

        DB::table('ram')->insert([
            'size' => 3,
            'score' => 2,
        ]);

        DB::table('ram')->insert([
            'size' => 4,
            'score' => 3,
        ]);
        DB::table('ram')->insert([
            'size' => 6,
            'score' => 4,
        ]);

        DB::table('ram')->insert([
            'size' => 8,
            'score' => 5,
        ]);
    }
}
