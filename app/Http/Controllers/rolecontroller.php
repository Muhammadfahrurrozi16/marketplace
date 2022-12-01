<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_role;
use App\Models\User;
use App\Models\toko;
use Illuminate\Support\Facades\DB;

class rolecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = user_role::all();
        $users = User::all();
        $Toko = toko::all();
        return view('back.admin.kelola_user.index', ['Role' => $role,'user' => $users, 'toko' => $Toko]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = user_role::all();
        $user = User::all();
        $Toko = toko::all();
        return view('back.admin.kelola_user.create', ['Role' => $role,'User' => $user,'toko' => $Toko]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'toko_id' => 'required',
            'aktif' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
               ]);
        $imagefile= $request->image;
        $image = $imagefile;
        $imagename = time().'.'.$image->getClientOriginalExtension(); 
        $imageuploud = $image->move('uploud\user',$imagename);
        $user = new User();
        $user->name = $request->name;
        $user->toko_id = $request->toko_id;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->aktif = $request->aktif;
        $user->image = $imagename;
        $user->save();
        return redirect('/admin/dashboard/user')->with(['message' => 'user added successfully!', 'status' => 'success']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
