<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameKategoriToJenisKebun extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penanamans', function (Blueprint $table) {
            $table->renameColumn('kategori', 'jenis_kebun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penanamans', function (Blueprint $table) {
            $table->renameColumn('jenis_kebun', 'kategori');
        });
    }
}
