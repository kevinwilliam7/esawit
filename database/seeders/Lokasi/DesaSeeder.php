<?php

namespace Database\Seeders\Lokasi;

use App\Models\Lokasi\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $desas = [
            ['kecamatan_id' => 1, 'name' => 'Bulu Bala'],
            ['kecamatan_id' => 1, 'name' => 'Cowet'],
            ['kecamatan_id' => 1, 'name' => 'Empirang Ujung'],
            ['kecamatan_id' => 1, 'name' => 'Hilir'],
            ['kecamatan_id' => 1, 'name' => 'Kebadu'],
            ['kecamatan_id' => 1, 'name' => 'Mak Kawing'],
            ['kecamatan_id' => 1, 'name' => 'Padi Kaye'],
            ['kecamatan_id' => 1, 'name' => 'Semoncol'],
            ['kecamatan_id' => 1, 'name' => 'Senyabang'],
            ['kecamatan_id' => 1, 'name' => 'Tae'],
            ['kecamatan_id' => 1, 'name' => 'Terniang Mali'],
            ['kecamatan_id' => 1, 'name' => 'Terniang Taba'],
            ['kecamatan_id' => 2, 'name' => 'Bereng Berkawat'],
            ['kecamatan_id' => 2, 'name' => 'Kasro Mego'],
            ['kecamatan_id' => 2, 'name' => 'Mawang Muda'],
            ['kecamatan_id' => 2, 'name' => 'Sungai Ilai'],
            ['kecamatan_id' => 2, 'name' => 'Sungai Ilai'],
            ['kecamatan_id' => 3, 'name' => 'Bahta'],
            ['kecamatan_id' => 3, 'name' => 'Bantai'],
            ['kecamatan_id' => 3, 'name' => 'Bonti'],
            ['kecamatan_id' => 3, 'name' => 'Empodis'],
            ['kecamatan_id' => 3, 'name' => 'Kampuh'],
            ['kecamatan_id' => 3, 'name' => 'Majel'],
            ['kecamatan_id' => 3, 'name' => 'Sami'],
            ['kecamatan_id' => 3, 'name' => 'Tunggul Boyok'],
            ['kecamatan_id' => 3, 'name' => 'Upe'],
            ['kecamatan_id' => 4, 'name' => 'Entikong'],
            ['kecamatan_id' => 4, 'name' => 'Nekan'],
            ['kecamatan_id' => 4, 'name' => 'Pala Pisang'],
            ['kecamatan_id' => 4, 'name' => 'Semanget'],
            ['kecamatan_id' => 4, 'name' => 'Suruh Tembawang'],
            ['kecamatan_id' => 5, 'name' => 'Balai Sebut'],
            ['kecamatan_id' => 5, 'name' => 'Empiyang'],
            ['kecamatan_id' => 5, 'name' => 'Jangkang Benua'],
            ['kecamatan_id' => 5, 'name' => 'Ketori'],
            ['kecamatan_id' => 5, 'name' => 'Pisang'],
            ['kecamatan_id' => 5, 'name' => 'Sape'],
            ['kecamatan_id' => 5, 'name' => 'Selampung'],
            ['kecamatan_id' => 5, 'name' => 'Semirau'],
            ['kecamatan_id' => 5, 'name' => 'Semombat'],
            ['kecamatan_id' => 5, 'name' => 'Tanggung'],
            ['kecamatan_id' => 5, 'name' => 'Terati'],
            ['kecamatan_id' => 6, 'name' => 'Belangin'],
            ['kecamatan_id' => 6, 'name' => 'Botuh Lintang'],
            ['kecamatan_id' => 6, 'name' => 'Kambong'],
            ['kecamatan_id' => 6, 'name' => 'Lape'],
            ['kecamatan_id' => 6, 'name' => 'Lintang Kapuas'],
            ['kecamatan_id' => 6, 'name' => 'Lintang Pelaman'],
            ['kecamatan_id' => 6, 'name' => 'Mengkiang'],
            ['kecamatan_id' => 6, 'name' => 'Nanga Biang'],
            ['kecamatan_id' => 6, 'name' => 'Pana'],
            ['kecamatan_id' => 6, 'name' => 'Penyeladi'],
            ['kecamatan_id' => 6, 'name' => 'Penyelimau'],
            ['kecamatan_id' => 6, 'name' => 'Penyelimau Jaya'],
            ['kecamatan_id' => 6, 'name' => 'Rambin'],
            ['kecamatan_id' => 6, 'name' => 'Semerangkai'],
            ['kecamatan_id' => 6, 'name' => 'Sungai Alai'],
            ['kecamatan_id' => 6, 'name' => 'Sungai Batu'],
            ['kecamatan_id' => 6, 'name' => 'Sungai Mawang'],
            ['kecamatan_id' => 6, 'name' => 'Sungai Muntik'],
            ['kecamatan_id' => 6, 'name' => 'Tapang Dulang'],
            ['kecamatan_id' => 6, 'name' => 'Beringin'],
            ['kecamatan_id' => 6, 'name' => 'Bunut'],
            ['kecamatan_id' => 6, 'name' => 'Ilir Kota'],
            ['kecamatan_id' => 6, 'name' => 'Sungai Sengkuang'],
            ['kecamatan_id' => 6, 'name' => 'Tanjung Kapuas'],
            ['kecamatan_id' => 6, 'name' => 'Tanjung Sekayam'],
            ['kecamatan_id' => 7, 'name' => 'Kelompu'],
            ['kecamatan_id' => 7, 'name' => 'Kuala Dua'],
            ['kecamatan_id' => 7, 'name' => 'Mobui'],
            ['kecamatan_id' => 7, 'name' => 'Sebongkuh'],
            ['kecamatan_id' => 7, 'name' => 'Sebuduh'],
            ['kecamatan_id' => 7, 'name' => 'Sejuah'],
            ['kecamatan_id' => 7, 'name' => 'Semayang'],
            ['kecamatan_id' => 7, 'name' => 'Tanjung Bunga'],
            ['kecamatan_id' => 7, 'name' => 'Tanjung Merpati'],
            ['kecamatan_id' => 7, 'name' => 'Tanap'],
            ['kecamatan_id' => 7, 'name' => 'Tunggal Bhakti'],
            ['kecamatan_id' => 8, 'name' => 'Balai Tinggi'],
            ['kecamatan_id' => 8, 'name' => 'Baru Lombak'],
            ['kecamatan_id' => 8, 'name' => 'Bhakti Jaya'],
            ['kecamatan_id' => 8, 'name' => 'Cupang'],
            ['kecamatan_id' => 8, 'name' => 'Enggadai'],
            ['kecamatan_id' => 8, 'name' => 'Harapan Makmur'],
            ['kecamatan_id' => 8, 'name' => 'Kuala Buayan'],
            ['kecamatan_id' => 8, 'name' => 'Kuala Rosan'],
            ['kecamatan_id' => 8, 'name' => 'Kunyil'],
            ['kecamatan_id' => 8, 'name' => 'Lalang'],
            ['kecamatan_id' => 8, 'name' => 'Melawi Makmur'],
            ['kecamatan_id' => 8, 'name' => 'Melawi Hulu'],
            ['kecamatan_id' => 8, 'name' => 'Melawi Hilir'],
            ['kecamatan_id' => 8, 'name' => 'Melobok'],
            ['kecamatan_id' => 8, 'name' => 'Meranggau'],
            ['kecamatan_id' => 8, 'name' => 'Mukti Jaya'],
            ['kecamatan_id' => 8, 'name' => 'Pampang Dua'],
            ['kecamatan_id' => 8, 'name' => 'Sungai Kembayau'],
            ['kecamatan_id' => 8, 'name' => 'Sungai Mayam'],
            ['kecamatan_id' => 9, 'name' => 'Inggis'],
            ['kecamatan_id' => 9, 'name' => 'Engkode'],
            ['kecamatan_id' => 9, 'name' => 'Kedukul'],
            ['kecamatan_id' => 9, 'name' => 'Layak Omang'],
            ['kecamatan_id' => 9, 'name' => 'Semanggis Raya'],
            ['kecamatan_id' => 9, 'name' => 'Semuntai'],
            ['kecamatan_id' => 9, 'name' => 'Serambai Jaya'],
            ['kecamatan_id' => 9, 'name' => 'Sungai Mawang'],
            ['kecamatan_id' => 9, 'name' => 'Tri Mulya'],
            ['kecamatan_id' => 10, 'name' => 'Empoto'],
            ['kecamatan_id' => 10, 'name' => 'Idas'],
            ['kecamatan_id' => 10, 'name' => 'Noyan'],
            ['kecamatan_id' => 10, 'name' => 'Semongan'],
            ['kecamatan_id' => 10, 'name' => 'Sungai Dangin'],
        ];
        Desa::create($desas);
    }
}
