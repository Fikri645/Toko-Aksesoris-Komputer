<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => 'Admin',
                'email' => 'erpeelshop@gmail.com',
                'password' => bcrypt('erpeelshop'),
                'role' => 'admin',
            ],
            [
                'name' => 'user123',
                'email' => 'user123@gmail.com',
                'password' => bcrypt('user123'),
                'role' => 'user',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
