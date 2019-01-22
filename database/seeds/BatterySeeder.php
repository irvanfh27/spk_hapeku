<?php

use Illuminate\Database\Seeder;

class BatterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('battery')->insert([
            'size' => 3000,
            'score' => 1,
        ]);
        DB::table('battery')->insert([
            'size' => 3200,
            'score' => 1.5,
        ]);
        DB::table('battery')->insert([
            'size' => 4000,
            'score' => 2,
        ]);
        DB::table('battery')->insert([
            'size' => 4200,
            'score' => 2.5,
        ]);
        DB::table('battery')->insert([
            'size' => 5000,
            'score' => 3,
        ]);
    }
}
