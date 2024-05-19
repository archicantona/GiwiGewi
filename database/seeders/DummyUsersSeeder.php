<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'role' => 'pelanggan',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin')
            ],
        ];

        foreach ($userData as $key => $val){
            User::create($val);
        }
    }
}
