<?php

namespace Database\Seeders\Lokasi;

use App\Models\Lokasi\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kecamatans = [
            ['kabupaten_id' => 1, 'name' => 'Balai'],
            ['kabupaten_id' => 1, 'name' => 'Beduai'],
            ['kabupaten_id' => 1, 'name' => 'Bonti'],
            ['kabupaten_id' => 1, 'name' => 'Entikong'],
            ['kabupaten_id' => 1, 'name' => 'Kapuas'],
            ['kabupaten_id' => 1, 'name' => 'Kembayan'],
            ['kabupaten_id' => 1, 'name' => 'Meliau'],
            ['kabupaten_id' => 1, 'name' => 'Mukok'],
            ['kabupaten_id' => 1, 'name' => 'Noyan'],
            ['kabupaten_id' => 1, 'name' => 'Parindu'],
            ['kabupaten_id' => 1, 'name' => 'Sekayam'],
            ['kabupaten_id' => 1, 'name' => 'Tayan Hilir'],
            ['kabupaten_id' => 1, 'name' => 'Tayan Hulu'],
            ['kabupaten_id' => 1, 'name' => 'Toba'],
        ];
        Kecamatan::create($kecamatans);
    }
}
