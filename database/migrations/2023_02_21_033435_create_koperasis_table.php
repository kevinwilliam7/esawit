<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoperasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koperasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perkebunan_id')->nullable();
            $table->string('nama_koperasi')->nullable();
            $table->integer('jumlah_anggota')->nullable();
            $table->double('luas')->nullable();
            $table->string('bank')->nullable();
            $table->date('akad')->nullable();
            $table->integer('nilai_kredit')->nullable();
            $table->integer('tahun_lunas')->nullable();
            $table->integer('standar_biaya')->nullable();
            $table->timestamps();

            $table->foreign('perkebunan_id')->on('perkebunans')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('koperasis');
    }
}
