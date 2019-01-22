<?php

use Illuminate\Database\Seeder;

class DualsimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('dual_sims')->insert([
            'dualsim' => 'yes',
            'score' => 1,
        ]);

        DB::table('dual_sims')->insert([
            'dualsim' => 'no',
            'score' => 0.5,
        ]);
    }
}
