<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $fillable = ['jasa_id', 'name', 'path'];

    public function jasa()
    {
        return $this->belongsTo('App\Models\Jasa', 'jasa_id');
    }
}
