<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sekolah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_sekolah')->insert([
            [
                'nama_sekolah' => 'SMPN 1 Kuningan',
                'alamat_sekolah' => 'Jl. Siliwangi No.74, Purwawinangun, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45512',
                'NIS' => '20213025'
            ],
            [
                'nama_sekolah' => 'SMPN 2 Kuningan',
                'alamat_sekolah' => 'Jl. Otista No.136, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511',
                'NIS' => '20212971'
            ],
            [
                'nama_sekolah' => 'SMPN 3 Kuningan',
                'alamat_sekolah' => 'Jl. Pramuka No.104, Purwawinangun, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45512',
                'NIS' => '20212991'
            ],
            [
                'nama_sekolah' => 'SMPN 4 Kuningan',
                'alamat_sekolah' => 'Jl. RE. Martadinata No.76, Cijoho, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45513',
                'NIS' => '20212986'
            ],
            [
                'nama_sekolah' => 'SMPN 5 Kuningan',
                'alamat_sekolah' => 'Ancaran, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45551',
                'NIS' => '20212984'
            ],
            [
                'nama_sekolah' => 'SMPN 6 Kuningan',
                'alamat_sekolah' => 'Jl. Pramuka Gg. Tunas III No.45, Purwawinangun, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45512',
                'NIS' => '20212983'
            ],
            [
                'nama_sekolah' => 'SMPN 7 Kuningan',
                'alamat_sekolah' => 'Jl. Aruji Kartawinata No.2, Kuningan, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45511',
                'NIS' => '20212982'
            ],
            [
                'nama_sekolah' => 'SMPN 1 Jalaksana',
                'alamat_sekolah' => 'Padamenak, Kec. Jalaksana, Kabupaten Kuningan, Jawa Barat 45554',
                'NIS' => '20212998'
            ],
            [
                'nama_sekolah' => 'SMPN 2 Jalaksana',
                'alamat_sekolah' => 'Babakanmulya, Kec. Jalaksana, Kabupaten Kuningan, Jawa Barat 45554',
                'NIS' => '20212974'
            ],
            [
                'nama_sekolah' => 'SMPN 1 Garawangi',
                'alamat_sekolaht' => 'Jl. Anggrek Raya, Purwasari, Kec. Kuningan, Kabupaten Kuningan, Jawa Barat 45514',
                'NIS' => '20213002'
            ],
            [
                'nama_sekolah' => 'SMPN 2 Garawangi',
                'alamat_sekolah' => 'Pakembangan, Kec. Garawangi, Kabupaten Kuningan, Jawa Barat 45571',
                'NIS' => '20212992'
            ],
            [
                'nama_sekolah' => 'SMPN 1 Kramatmulya',
                'alamat_sekolah' => 'l. Raya Kramatmulya No.278, Kramatmulya, Kec. Kramatmulya, Kabupaten Kuningan, Jawa Barat 45553',
                'NIS' => '20213013'
            ],
            [
                'nama_sekolah' => 'SMPN 2 Kramatmulya',
                'alamat_sekolah' => 'Cilaja, Kec. Kramatmulya, Kabupaten Kuningan, Jawa Barat 45553',
                'NIS' => '20212972'
            ]    
        ]);
    }
}
