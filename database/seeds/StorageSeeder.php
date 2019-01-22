<?php

use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('storage')->insert([
            'size' => 16,
            'score' => 1,
        ]);

        DB::table('storage')->insert([
            'size' => 32,
            'score' => 2,
        ]);

        DB::table('storage')->insert([
            'size' => 64,
            'score' => 3,
        ]);

        DB::table('storage')->insert([
            'size' => 128,
            'score' => 4,
        ]);

        DB::table('storage')->insert([
            'size' => 512,
            'score' => 5,
        ]);
    }
}
