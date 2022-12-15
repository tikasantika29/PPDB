<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin_disdik', 
        ]);
        DB::table('roles')->insert([
            'name' => 'admin_smp', 
        ]);

        DB::table('roles')->insert([
            'name' => 'admin_sd', 
        ]);
    }
}
