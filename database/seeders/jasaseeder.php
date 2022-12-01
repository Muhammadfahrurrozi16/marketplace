<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jasaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jasas')->insert(
            array (
            [
             'name'=>'SIMPLICITY A'	
             ,'seller_id' =>'1'	
             ,'kategori_id' =>'3'	
             ,'penilaian_id' =>'1'	
             ,'harga'=>'3500000'	
             ,'lokasi'=>'jepara'
             ,'deskripsi'=>
             '- Backdrop dekorasi 4m
             - Mini garden
             - Full fresh flower
             - Welcome gate standart
             - 1 set kursi pelaminan
             - 2 standing photo
             - Lighting backdrop
             - Penjor janur
             - 1 box amplop
             - 1 meja penerima tamu
             - 1 guest book
             - 1 set akad'
            ,'diskon'=>'0'	
            ,'aktif'=>'y' 
            ],
            [
                'name'=>'SIMPLICITY B'	
                ,'seller_id' =>'1'	
                ,'kategori_id' =>'3'	
                ,'penilaian_id' =>'1'	
                ,'harga'=>'4000000'	
                ,'lokasi'=>	'jepara'
                ,'deskripsi'=>
                '- Backdrop dekorasi 6m
                - Mini garden
                - Full fresh flower
                - Welcome gate standart
                - 1 set kursi pelaminan
                - 2 standing photo
                - Lighting backdrop
                - Penjor janur
                - 1 box amplop
                - 1 meja penerima tamu
                - 1 guest book
                - 1 set akad
                - Flooring melamine'
               ,'diskon'=>'0'	
               ,'aktif'=>'y'
            ],
               [
                'name'=>'SIMPLICITY B'	
                ,'seller_id' =>'1'	
                ,'kategori_id' =>'3'	
                ,'penilaian_id' =>'1'	
                ,'harga'=>'4000000'	
                ,'lokasi'=>	'jepara'
                ,'deskripsi'=>
                '- Backdrop dekorasi 6m
                - Mini garden
                - Full fresh flower
                - Welcome gate standart
                - 1 set kursi pelaminan
                - 2 standing photo
                - Lighting backdrop
                - Penjor janur
                - 1 box amplop
                - 1 meja penerima tamu
                - 1 guest book
                - 1 set akad
                - Flooring melamine
                - Hand bouquet wedding'
               ,'diskon'=>'0'	
               ,'aktif'=>'y'  
            ])
        );
    }
}
