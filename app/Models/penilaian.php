<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;
    public function Jasa(){ 
        return $this->hasMany(jasa::class);
        }
}
