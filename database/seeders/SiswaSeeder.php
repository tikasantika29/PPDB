<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            [
                'nisn' => '0095291998',
                'nama' => 'Almalia Nurhanipah',
                'nik' => '161701001',
                'jk' => 'Perempuan',
                'tempat_lahir' => 'Kuningan',
                'tgl_lahir' => '2009/10/29',
                'alamat' => 'Winduhaji',
                'id_ortu' => '1'
            ],
            [
                'nisn' => '0098015852',
                'nama' => 'Andra Eka Nugraha',
                'nik' => '161701003',
                'jk' => 'Laki-laki',
                'tempat_lahir' => 'Kuningan',
                'tgl_lahir' => '2009/12/26',
                'alamat' => 'Winduhaji',
                'id_ortu' => '2'
            ]
            
        ]);
    }
}
