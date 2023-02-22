<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenanamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penanamans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perkebunan_id')->nullable();
            $table->enum('kategori', ['inti','plasma']);
            $table->integer('tahun')->nullable();
            $table->double('luas')->nullable();
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
        Schema::dropIfExists('penanamans');
    }
}
