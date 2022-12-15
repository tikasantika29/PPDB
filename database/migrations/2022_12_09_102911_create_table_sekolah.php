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
        Schema::create('table_sekolah', function (Blueprint $table) {
            $table->increments('id_sekolah');
            $table->foreignId('id_siswa');
            $table->string('nama_sekolah');
            $table->text('alamat_sekolah');
            $table->char('NIS', 20);
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
        Schema::dropIfExists('table_sekolah');
    }
};
