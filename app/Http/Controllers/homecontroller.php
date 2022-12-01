<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori_jasa;
use App\Models\jasa;
use App\Models\toko;
use App\Models\User;
use App\Models\penilaian;
use App\Models\item;
use Illuminate\Support\Facades\DB;

class homecontroller extends Controller
{
    public function index() 
    {
    $kategori = kategori_jasa::all(); 
    return view('front.pembeli.home',['Kategori' => $kategori]); 
    }
    public function detailjasa($id,$user_id){
    $Jasa = jasa::where('id', $id)->get();
    $users = user::where('id', $user_id)->get();
    $items = item::where('jasa_id', $id)->get(); 
    return view('front.pembeli.Detailjasa',['jasa' => $Jasa,'Item' => $items, 'user' => $users]);
    } 
    public function jasakategori($id)
    {
    $Jasa =jasa::where('kategori_id',$id)->get();
    return view('front.pembeli.jasakategori',['jasa' => $Jasa]);
    }
    public function showjasa()
    {
     $Jasa = jasa::all();
    return view('front.pembeli.Jasa',['jasa' => $Jasa]); 
    }
    public function index1() 
    { 
    return view('front.vendor.Dashboard'); 
    }
}
