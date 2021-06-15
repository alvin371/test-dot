<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('penulis.index');
    }
    public function indexapi()
    {
        return Penulis::all();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('penulis/add');
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
        $penulis = new Penulis;
        $penulis->nama = $request->nama;
        $penulis->save();
        return redirect('penulis')->with('message', 'Tambah Penulis Success');
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
        $penulis = Penulis::find($id);
        return view('penulis/edit', compact('penulis'));
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
        $penulis = Penulis::find($id);
        $penulis->nama = $request->nama ? $request->nama : $penulis->nama;
        $penulis->save();
        return redirect('penulis');
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
        $penulis = Penulis::find($id);
        $penulis->delete();
        return redirect('penulis');
    }
    public function addPenulis()
    {
        $penulis = [
            ["nama" => "Andrea Hirata"],
            ["nama" => "Tere Liye"],
            ["nama" => "Asma Nadia"],
            ["nama" => "Raditya Dika"]
        ];
        Penulis::insert($penulis);
        return "Roles are Created Succesfully";
    }
    public function cariPenulis($id)
    {
        $penulis = Penulis::find($id);
        $buku = $penulis->buku;
        return $buku;
    }
}
