<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BatterySeeder::class);
        $this->call(CameraSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(DualsimSeeder::class);
        $this->call(RamSeeder::class);
        $this->call(SizesSeeder::class);
        $this->call(SoundSeeder::class);
        $this->call(StorageSeeder::class);
    }
}
