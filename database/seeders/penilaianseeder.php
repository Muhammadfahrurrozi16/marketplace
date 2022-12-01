<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penilaianseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penilaians')->insert(
            array (
            [
            'komentar' => 'bagus sekali'	
            ,'rating' => '5'	
            ],
            [
            'komentar' => 'bagus sekali'	
            ,'rating' => '4'	
            ])
        );
    }
}
