<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori_jasa;
use Illuminate\Support\Facades\DB;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = kategori_jasa::all();
        return view('back.admin.kelola_kategori.index', ['Kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = kategori_jasa::all();
        return view('back.admin.kelola_kategori.create', ['Kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'icon' => 'required|mimes:jpg,png,jpeg,gif,svg|max:2048',
               ]);
        $iconfile= $request->icon;
        $icon = $iconfile;
        $iconname = time().'.'.$icon->getClientOriginalExtension(); 
        $iconuploud = $icon->move('uploud\kategori',$iconname);
        $kategori = new kategori_jasa();;
        $kategori->name = $request->name;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->icon =$iconname;
        $kategori->save();
        return redirect('/admin/dashboard/kategori')->with(['message' => 'Kategori added successfully!', 'status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = kategori_jasa::where('id', $id)->get();
        return view('back.admin.kelola_kategori.edit', ['Kategori' => $kategori]);
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
        $kategori = kategori_jasa::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'icon' => 'required|file|mimes:jpg,png,jpeg,gif,svg|max:2048',
               ]);
        $iconfile= $request->icon;
        $icon = $iconfile;
        $iconname = time().'.'.$icon->getClientOriginalExtension(); 
        $iconuploud = $icon->move('uploud\kategori',$iconname);
        $kategori->name = $request->name;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->icon =$iconname;
        $kategori->save();
        return redirect('/admin/dashboard/kategori')->with(['message' => 'Kategori added successfully!', 'status' => 'success']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = kategori_jasa::findOrFail($id);
        $kategori->delete();
        return redirect('/admin/dashboard/kategori');
    }
}
