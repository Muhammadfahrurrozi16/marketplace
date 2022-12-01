<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert(
            array (
            [
            'role_id'=>'2'
            ,'toko_id'=>'1'	
            ,'name'=>'enka'
            ,'email'=>'enka@gmail.com'
            ])
        );
    }
}
