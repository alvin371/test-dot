<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Penulis;
use DB;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        return view('buku/index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $penulis = Penulis::all();
        return view('buku/add', compact('penulis'));
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
        $buku = new Buku;
        // dd($request);
        $buku->judul = $request->judul;
        $buku->halaman = $request->halaman;
        $buku->waktu = $request->waktu;
        $buku->isi = $request->isi;
        $buku->gambar = $request->gambar ? $request->file('gambar')->store('GambarBuku','public') : $request->judul;
        $buku->save();
        $buku->penulis()->attach($request->input('n_penulis'));
        return redirect('/buku')->with('status', 'Berhasil Menambahkan buku');
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
        $buku = Buku::with('penulis')->where('id', $id)->get();
        foreach($buku as $row){

            return view('buku/detail', compact('row'));
        }
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
        $buku = Buku::with('penulis')->find($id);
        $penulis = Penulis::all();
        return view('buku/edit', compact('buku','penulis'));
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
        $buku = Buku::find($id);
        $buku->judul = $request->judul ? $request->judul : $buku->judul;
        $buku->halaman = $request->halaman ? $request->halaman : $buku->halaman;
        $buku->waktu = $request->waktu ? $request->waktu : $buku->waktu;
        $buku->isi = $request->isi ? $request->isi : $buku->isi;
        $buku->gambar = $request->gambar ? $request->file('gambar')->store('GambarBuku','public') : $buku->gambar;
        $buku->save();
        $buku->penulis()->attach($request->input('n_penulis'));
        return redirect('buku')->with('message','Buku berhasil di update!');
        

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
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku')->with('message','Buku berhasil di hapus!');
    }



    //API
    public function indexapi()
    {
        $buku = Buku::all();
        return $buku;
    }

    public function detail($id)
    {
        $buku = Buku::with('penulis')->where('id', $id)->get();
        return $buku;
    }
    public function judul($judul)
    {
        $buku = Buku::with('penulis')->where('judul',$judul)->get();
        return $buku;
    }
    public function penulis($penulis)
    {
        $buku = Buku::whereHas('penulis', function ($query) use($penulis) {
            $query->where('nama', $penulis);
        })->get();
        return $buku;
    }
}
