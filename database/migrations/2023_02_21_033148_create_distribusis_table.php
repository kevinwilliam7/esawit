<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribusis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perkebunan_id')->nullable();
            $table->string('nama_pabrik')->nullable();
            $table->integer('jumlah_distribusi')->nullable();
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
        Schema::dropIfExists('distribusis');
    }
}
