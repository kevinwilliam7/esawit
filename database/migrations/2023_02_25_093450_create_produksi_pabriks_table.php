<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksiPabriksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_pabriks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pabrik_id');
            $table->string('hasil_pabrik');
            $table->float('jumlah_produksi');
            $table->year('tahun_produksi');
            $table->timestamps();

            $table->foreign('pabrik_id')->on('pabriks')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produksi_pabriks');
    }
}
