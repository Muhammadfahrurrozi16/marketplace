<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    use HasFactory;
    public function user(){ 
        return $this->belongsTo(User::class);
        }
    public function Jasa(){ 
        return $this->belongsTo(jasa::class);
        }
    public function Pembayaran(){ 
        return $this->belongsTo(pembayaran::class);
        }
}
