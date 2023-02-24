<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkebunansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkebunans', function (Blueprint $table) {
            $table->id();
            $table->string('npwp')->nullable();
            $table->string('nama');
            $table->string('alamat');
            $table->string('email')->nullable();
            $table->string('direktur')->nullable();
            $table->string('gm')->nullable();
            $table->string('kadiv_legal')->nullable();
            $table->string('manager_mill')->nullable();
            $table->string('nomor_akta_pendirian')->nullable();
            $table->date('tanggal_akta_pendirian')->nullable();
            $table->string('notaris_akta_pendirian')->nullable();
            $table->string('komisaris_akta_pendirian')->nullable();
            $table->string('direktur_akta_pendirian')->nullable();
            $table->string('nomor_akta_perubahan')->nullable();
            $table->date('tanggal_akta_perubahan')->nullable();
            $table->string('notaris_akta_perubahan')->nullable();
            $table->string('komisaris_akta_perubahan')->nullable();
            $table->string('direktur_akta_perubahan')->nullable();
            $table->integer('bulanan_kebun')->nullable();
            $table->integer('tetap_kebun')->nullable();
            $table->integer('lepas_kebun')->nullable();
            $table->integer('musiman_kebun')->nullable();
            $table->integer('bulanan_pabrik')->nullable();
            $table->integer('tetap_pabrik')->nullable();
            $table->integer('lepas_pabrik')->nullable();
            $table->integer('musiman_pabrik')->nullable();
            $table->integer('tka')->nullable();
            $table->string('jabatan_tka')->nullable();
            $table->enum('pola_kemitraan', ['kemitraan mandiri','kemitraan satu manajemen'])->nullable();
            $table->integer('kk_target_plasma')->nullable();
            $table->double('ha_target_plasma')->nullable();
            $table->integer('kk_realisasi_plasma')->nullable();
            $table->double('ha_realisasi_plasma')->nullable();
            $table->date('update_terakhir')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('perkebunans');
    }
}
