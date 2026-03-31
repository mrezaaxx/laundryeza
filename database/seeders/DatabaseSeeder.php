<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OutletSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PaketSeeder::class);
        \App\Models\Member::factory(10)->create();
        $this->call(TransaksiSeeder::class);
        $this->call(DataTransaksiSeeder::class);
    }
}
