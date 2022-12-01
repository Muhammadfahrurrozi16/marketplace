<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jasa extends Model
{
    use HasFactory;
    public function kategori(){ 
        return $this->belongsTo(kategori_jasa::class);
        }
    public function user(){ 
        return $this->belongsTo(User::class);
        }
    public function Penilaian(){ 
        return $this->belongsTo(penilaian::class);
        }
     public function Item(){ 
        return $this->hasMany(item::class);
        }

}
