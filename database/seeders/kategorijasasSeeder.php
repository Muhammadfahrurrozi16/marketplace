<?php

namespace Database\Seeders;

use App\Models\kategori_jasa;
use Illuminate\Database\Seeder;

class kategorijasasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori_jasas = [
            [
                'name' => 'Wedding',
                'deskripsi' => 'Wedding Decorations',
            ]
        ];
        kategori_jasa::insert($kategori_jasas);
    }
}
