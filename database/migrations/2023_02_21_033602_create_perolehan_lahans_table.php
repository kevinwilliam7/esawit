<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerolehanLahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perolehan_lahans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perkebunan_id')->nullable();
            $table->string('jenis_kebun')->nullable();
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
        Schema::dropIfExists('perolehan_lahans');
    }
}
