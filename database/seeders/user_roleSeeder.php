<?php

namespace Database\Seeders;

use App\Models\user_role;
use Illuminate\Database\Seeder;

class user_roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = [
            [
            'role' => 'admin'
                
            ]
        ];
        user_role::insert($user_role);

    }
}
