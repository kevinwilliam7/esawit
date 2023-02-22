<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['pabrik','perkebunan']);
            $table->string('perkebunan_id')->nullable();
            $table->string('pabrik_id')->nullable();
            $table->unsignedBigInteger('desa_id');
            $table->timestamps();

            $table->foreign('desa_id')->on('desas')->references('id')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasis');
    }
}
