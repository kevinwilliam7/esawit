<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIblhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iblhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perkebunan_id');
            $table->string('jenis_dokumen')->nullable();
            $table->string('nomor_surat')->nullable();
            $table->date('tanggal')->nullable();
            $table->float('luas')->nullable();
            $table->string('penjabat_penerbit')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('iblhs');
    }
}
