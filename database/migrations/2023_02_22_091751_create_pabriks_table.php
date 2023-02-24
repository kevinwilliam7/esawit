<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePabriksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pabriks', function (Blueprint $table) {
            $table->id();
            $table->string('npwp')->nullable();
            $table->string('nama');
            $table->string('nama_grup')->nullable();
            $table->string('pimpinan')->nullable();
            $table->string('jabatan_pimpinan')->nullable();
            $table->string('tahun_operasi')->nullable();
            $table->string('alamat_kantor')->nullable();
            $table->unsignedFloat('luas_lokasi_pabrik')->nullable();
            $table->string('status_perusahaan')->nullable();
            $table->string('bursa_efek')->nullable();
            $table->integer('tenaga_kerja_wni')->nullable();
            $table->integer('tenaga_kerja_asing')->nullable();
            $table->string('telp')->nullable();
            $table->string('email')->nullable();
            $table->string('nomor_amdal')->nullable();
            $table->string('amdal')->nullable();
            $table->date('ditetapkan_amdal')->nullable();
            $table->date('berakhir_amdal')->nullable();
            $table->string('penjabat_amdal')->nullable();
            $table->string('keterangan_amdal')->nullable();
            $table->string('nomor_siupp')->nullable();
            $table->string('siupp')->nullable();
            $table->date('ditetapkan_siupp')->nullable();
            $table->date('berakhir_siupp')->nullable();
            $table->string('penjabat_siupp')->nullable();
            $table->string('keterangan_siupp')->nullable();
            $table->string('nomor_situ')->nullable();
            $table->string('situ')->nullable();
            $table->date('ditetapkan_situ')->nullable();
            $table->date('berakhir_situ')->nullable();
            $table->string('penjabat_situ')->nullable();
            $table->string('keterangan_situ')->nullable();
            $table->string('nomor_hgb')->nullable();
            $table->string('hgb')->nullable();
            $table->date('ditetapkan_hgb')->nullable();
            $table->date('berakhir_hgb')->nullable();
            $table->string('penjabat_hgb')->nullable();
            $table->string('keterangan_hgb')->nullable();
            $table->string('nomor_imb_pabrik')->nullable();
            $table->string('imb_pabrik')->nullable();
            $table->date('ditetapkan_imb_pabrik')->nullable();
            $table->date('berakhir_imb_pabrik')->nullable();
            $table->string('penjabat_imb_pabrik')->nullable();
            $table->string('keterangan_imb_pabrik')->nullable();
            $table->string('nomor_imb_perumahan')->nullable();
            $table->string('imb_perumahan')->nullable();
            $table->date('ditetapkan_imb_perumahan')->nullable();
            $table->date('berakhir_imb_perumahan')->nullable();
            $table->string('penjabat_imb_perumahan')->nullable();
            $table->string('keterangan_imb_perumahan')->nullable();
            $table->string('nomor_ijin_gangguan')->nullable();
            $table->string('ijin_gangguan')->nullable();
            $table->date('ditetapkan_ijin_gangguan')->nullable();
            $table->date('berakhir_ijin_gangguan')->nullable();
            $table->string('penjabat_ijin_gangguan')->nullable();
            $table->string('keterangan_ijin_gangguan')->nullable();
            $table->string('nomor_ijin_limbah_cair')->nullable();
            $table->string('ijin_limbah_cair')->nullable();
            $table->date('ditetapkan_ijin_limbah_cair')->nullable();
            $table->date('berakhir_ijin_limbah_cair')->nullable();
            $table->string('penjabat_ijin_limbah_cair')->nullable();
            $table->string('keterangan_ijin_limbah_cair')->nullable();
            $table->string('nomor_ijin_radio')->nullable();
            $table->string('ijin_radio')->nullable();
            $table->date('ditetapkan_ijin_radio')->nullable();
            $table->date('berakhir_ijin_radio')->nullable();
            $table->string('penjabat_ijin_radio')->nullable();
            $table->string('keterangan_ijin_radio')->nullable();
            $table->string('nomor_land_aplikasi')->nullable();
            $table->string('land_aplikasi')->nullable();
            $table->date('ditetapkan_land_aplikasi')->nullable();
            $table->date('berakhir_land_aplikasi')->nullable();
            $table->string('penjabat_land_aplikasi')->nullable();
            $table->string('keterangan_land_aplikasi')->nullable();
            $table->string('nomor_mesin_pabrik')->nullable();
            $table->string('mesin_pabrik')->nullable();
            $table->date('ditetapkan_mesin_pabrik')->nullable();
            $table->date('berakhir_mesin_pabrik')->nullable();
            $table->string('penjabat_mesin_pabrik')->nullable();
            $table->string('keterangan_mesin_pabrik')->nullable();
            $table->string('nomor_ijin_timbang')->nullable();
            $table->string('ijin_timbang')->nullable();
            $table->date('ditetapkan_ijin_timbang')->nullable();
            $table->date('berakhir_ijin_timbang')->nullable();
            $table->string('penjabat_ijin_timbang')->nullable();
            $table->string('keterangan_ijin_timbang')->nullable();
            $table->integer('kapasitas_produksi')->nullable();
            $table->string('nomor_dokumen_sertifikat')->nullable();
            $table->string('dokumen_sertifikat')->nullable();
            $table->date('upload_terakhir')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pabriks');
    }
}
