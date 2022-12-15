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
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->string('nama');
            $table->char('nik', 20);
            $table->char('nisn', 20);
            $table->enum('jk', ['Laki-laki', 'Perempuan']);
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->foreignId('id_ortu');
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
        Schema::dropIfExists('siswa');
    }
};
