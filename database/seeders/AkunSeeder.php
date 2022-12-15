<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name'=>'Euis',
                'email'=>'euis@egmail.com',
                'level'=>'admin',
                'password'=> bcrypt('123456'),
            ],
            [
                'username' => 'siswa',
                'name'=>'koko',
                'email'=>'koko@egmail.com',
                'level'=>'siswa',
                'password'=> bcrypt('111111'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
