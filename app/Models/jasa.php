<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
    use HasFactory;
    protected $table = 'jasas';
    protected $fillable = [
        'name', 'seller_id', 'kategori_id', 'penilaian_id', 'harga', 'lokasi', 'deskripsi', 'diskon'
    ];

    public function items(){
        return $this->hasMany('App\Models\Item', 'jasa_id', 'id');
    }
}
