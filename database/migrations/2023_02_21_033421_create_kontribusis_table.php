<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontribusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontribusis', function (Blueprint $table) {
            $table->id();
            $table->morphs('kategori');
            $table->enum('pelaksanaan', ['realisasi','rencana']);
            $table->integer('tahun')->nullable();
            $table->string('jenis_kegiatan')->nullable();
            $table->date('tanggal')->nullable();
            $table->integer('nilai_setara')->nullable();
            $table->unsignedBigInteger('desa_id')->nullable();
            $table->timestamps();

            $table->foreign('desa_id')->on('desas')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontribusis');
    }
}
