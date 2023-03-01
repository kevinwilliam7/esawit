<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbs', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->integer('tbs_3')->unsigned();
            $table->integer('tbs_4')->unsigned();
            $table->integer('tbs_5')->unsigned();
            $table->integer('tbs_6')->unsigned();
            $table->integer('tbs_7')->unsigned();
            $table->integer('tbs_8')->unsigned();
            $table->integer('tbs_9')->unsigned();
            $table->integer('tbs_10')->unsigned();
            $table->integer('tbs_21')->unsigned();
            $table->integer('tbs_22')->unsigned();
            $table->integer('tbs_23')->unsigned();
            $table->integer('tbs_24')->unsigned();
            $table->integer('tbs_25')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbs');
    }
}
