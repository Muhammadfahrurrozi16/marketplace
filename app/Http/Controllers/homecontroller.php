<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index() 
    { 
    return view('front.pembeli.home'); 
    }
    public function index1() 
    { 
    return view('front.vendor.Dashboard'); 
    }
}
