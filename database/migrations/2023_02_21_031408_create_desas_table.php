<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kecamatan_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('kecamatan_id')->on('kecamatans')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->unique(['kecamatan_id', 'name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desas');
    }
}
