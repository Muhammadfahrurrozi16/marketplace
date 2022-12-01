<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori_jasa extends Model
{
    use HasFactory;
    protected $table = 'kategori_jasas'; 
    protected $fillable = ['id','name','deskripsi','icon'];
    public function Jasa(){ 
        return $this->hasMany(jasa::class);
        }

}
