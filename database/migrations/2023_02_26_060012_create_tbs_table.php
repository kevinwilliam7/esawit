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
            $table->int('tbs_3');
            $table->int('tbs_4');
            $table->int('tbs_5');
            $table->int('tbs_6');
            $table->int('tbs_7');
            $table->int('tbs_8');
            $table->int('tbs_9');
            $table->int('tbs_10');
            $table->int('tbs_21');
            $table->int('tbs_22');
            $table->int('tbs_23');
            $table->int('tbs_24');
            $table->int('tbs_25');
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
