<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tokoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tokos')->insert(
            array (
            [
            'nama'=>'enka dekorasi'
            ,'alamat'=>': Margoyoso, jl.kauman 3, rt 07 rw 03,
            Kalinyamatan, Jepara.'	
            ,'deskripsi'=>'Enka dekorasi adalah penyedia dekorasi'
            ,'tentang'=>
            '- Harga tergantung model dekorasi
            - Harga belum termasuk transport  Free transport jarak < 10 km, Dikenakan Charge untuk jarak > 10 km (Rp. 150.000,-/ 10 km)
            - Harga keseluruhan belum termasuk panggung dan plafon
            - Extended custom décor dikenakan additional charge Rp. 1.000.000-Rp. 5.000.000
            (tergantung model décor)
            - Pemasangan H-1
            - Booking wajib DP Minimal Rp. 1.000.000,00 untukHome Decoration
            - Down payment (DP) akan secara otomatis hilang jikaterjadi pembatalan sepihak dari klien
            - Pelunasan maksimal H+3
            - Fix model dekorasi maksimal H-30
            - Setiap item di luar package dikenakan additional charge
            - Pengurangan item tidak berlaku untuk harga package'
            ,'image'=> '-'	
            ,'aktif'=>'y'
            ])
        );
    }
}
