<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create([
            'name' => 'Pemerintah Kabupaten Sanggau',
            'link' => 'https://sanggau.go.id/',
            'image' => 'assets/images/partner/pemkab_sanggau.png',
            'order' => 1,
        ]);

        Partner::create([
            'name' => 'ELPAGAR',
            'link' => 'https://elpagar.org/',
            'image' => 'assets/images/partner/elpagar.png',
            'order' => 2
        ]);
    }
}
