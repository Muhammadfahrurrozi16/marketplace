<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Models\jasa;
use App\Models\kategori_jasa;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class jasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = item::groupBy('jasa_id')->get();
        return view('front.vendor.jasa.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori_jasas = kategori_jasa::all();
        return view('front.vendor.jasa.tambah', ['kategori_jasas' => $kategori_jasas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // ddd($request);
        $validation = $request->validate([
            'name' => 'required',
            'kategori' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'diskon' => 'required',
            'img' => 'required',
        ]);
        // ddd($validation);

        // return $request->file('img')->store('jasa-images');

        $will_insert = [];
        
        if ($request->file('img')) {
            $files = Arr::flatten($request->file('img')) ;
            foreach ($files as $file) {
                $filename = time() . '_' . $file->getClientoriginalname();
                $path = $file->storeAs('jasa-uploads', $filename);
                array_push($will_insert, [
                    'name' => $filename,
                    'path' => $path,
                ]);
            }
        }
        // ddd($will_insert);


        $jasa = new jasa();
        $jasa->name = $validation['name'];
        $jasa->kategori_id = $validation['kategori'];
        $jasa->lokasi = $validation['lokasi'];
        $jasa->harga = $validation['harga'];
        $jasa->deskripsi = $validation['deskripsi'];
        $jasa->diskon = $validation['diskon'];
        $jasa->seller_id = auth()->id();
        $jasa->save();
        $jasa->items()->createMany($will_insert);


        return redirect()->route('jasa.index');
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
        $jasa = jasa::find($id);
        $imgs = item::where('jasa_id', $id)->get();
        // ddd($imgs);
        return view('front.vendor.jasa.show', ['jasa' => $jasa, 'imgs' => $imgs]);
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
