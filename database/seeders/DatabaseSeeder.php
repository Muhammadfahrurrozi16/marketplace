<?php

namespace Database\Seeders;

use App\Models\user_role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(user_roleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(kategorijasasSeeder::class);
    }
}
