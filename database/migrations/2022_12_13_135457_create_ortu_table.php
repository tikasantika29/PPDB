<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_ortu', function (Blueprint $table) {
            $table->increments('id_ortu');
            $table->foreignId('id_siswa');
            $table->string('nama_ortu');
            $table->string('pekerjaan');
            $table->char('nohp_ortu', 20);
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
        Schema::dropIfExists('tb_ortu');
    }
};
