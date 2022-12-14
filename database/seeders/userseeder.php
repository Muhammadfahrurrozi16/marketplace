<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'admin',
                'role_id' => 1,
                'email' => 'admin@example.com',
                'password' => bcrypt('123456'),
            ],
            // [
            //     'name' => 'user',
            //     'email' => 'user@example.com',
            //     'password' => bcrypt('123456'),
            // ],
        ];
        User::insert($user);
    }
}
