<?php

use Illuminate\Database\Seeder;

class CameraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('camera')->insert([
            'size' => 12,
            'score' => 1,
        ]);

        DB::table('camera')->insert([
            'size' => 14,
            'score' => 1.2,
        ]);

        DB::table('camera')->insert([
            'size' => 16,
            'score' => 1.5,
        ]);

        DB::table('camera')->insert([
            'size' => 24,
            'score' => 3,
        ]);

        DB::table('camera')->insert([
            'size' => 48,
            'score' => 5,
        ]);
    }
}
