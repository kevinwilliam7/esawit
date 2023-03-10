<?php

namespace Database\Seeders;

use Database\Seeders\Lokasi\DesaSeeder;
use Database\Seeders\Lokasi\KabupatenSeeder;
use Database\Seeders\Lokasi\KecamatanSeeder;
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
        // \App\Models\User::factory(10)->create();
        $this->call(KabupatenSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(DesaSeeder::class);
    }
}
