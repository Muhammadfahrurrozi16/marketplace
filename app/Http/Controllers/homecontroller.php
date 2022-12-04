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
    return view('front.pembeli.Detailjasa',['jasa' => $Jasa,'item' => $items, 'user' => $users]);
    } 
    public function jasakategori($id)
    {
    $Jasa =jasa::where('kategori_id',$id)->get();
    return view('front.pembeli.jasakategori',['jasa' => $Jasa]);
    }
    public function showseller($id)
    {
    $Jasa =jasa::where('user_id',$id)->get();
    $users = user::where('id', $id)->get();
    return view('front.pembeli.profiltoko',['jasa' => $Jasa, 'user' => $users]);
    }
    public function tampiljasa($id)
    {
    $Jasa =jasa::where('user_id',$id)->get();
    $users = user::where('id', $id)->get();
    return view('front.pembeli.profiljasa',['jasa' => $Jasa, 'user' => $users]);
    }
    public function tampilFAQ($id)
    {
    $Jasa =jasa::where('user_id',$id)->get();
    $users = user::where('id', $id)->get();
    return view('front.pembeli.FAQjasa',['jasa' => $Jasa, 'user' => $users]);
    }
    public function showjasa()
    {
     $Jasa = jasa::all();
     $items = item::where('jasa_id')->first(); 
    return view('front.pembeli.Jasa',['jasa' => $Jasa, 'item' => $items]); 
    }
    public function checkout($id,$user_id)
    {
    $Jasa = jasa::where('id', $id)->get();
    $users = user::where('id', $user_id)->get();
    return view('front.pembeli.pemesanan',['jasa' => $Jasa, 'user' => $users]); 
    }
    public function index1() 
    { 
    return view('front.vendor.Dashboard'); 
    }
}
