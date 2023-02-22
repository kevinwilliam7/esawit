<?php

namespace Database\Seeders\Lokasi;

use App\Models\Lokasi\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kabupaten::create([
            'name' => 'Sanggau',
        ]);
    }
}
