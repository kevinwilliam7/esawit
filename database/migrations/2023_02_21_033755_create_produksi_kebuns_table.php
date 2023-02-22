<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksiKebunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_kebuns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perkebunan_id')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('jenis_kebun')->nullable();
            $table->string('triwulan')->nullable();
            $table->integer('tahun')->nullable();
            $table->double('jumlah_produksi')->nullable();
            $table->double('produktifitas')->nullable();
            $table->double('rata_produktifitas')->nullable();
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
        Schema::dropIfExists('produksi_kebuns');
    }
}
