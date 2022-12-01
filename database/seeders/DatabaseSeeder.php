<?php

namespace Database\Seeders;

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
        $this->call(tokoseeder::class);
        $this->call(userseeder::class);
        $this->call(penilaianseeder::class);
        $this->call(jasaseeder::class);
        // User::factory(10)->create();
    }
}
