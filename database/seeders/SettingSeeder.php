<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email' => 'dpp@sanggau.go.id',
            'telepon' => '0564-2023528/2023503',
            'alamat' => 'Dinas Perkebunan dan Pertenakan Kabupaten Sanggau',
            'lat' => '0.12627293',
            'lng' => '110.59025645',
        ]);
    }
}
