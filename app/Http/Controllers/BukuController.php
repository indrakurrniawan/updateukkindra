<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $key = $request->key;
        $jumlahbaris = 3;
        if(strlen($key)) {
            $bukus = buku::where('buku','like',"%$key%")
            ->orWhere('judul','like',"%$key%")
            ->orWhere('penulis','like',"%key%")
            ->paginate($jumlahbaris);
        }else{
            
            $bukus = Buku::orderBy('created_at','DESC')->paginate($jumlahbaris);
        }

        return view ('pages.buku.index',compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd ($request->all());
        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success','Buku Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $buku = Buku::findOrFail($id);
        return view('pages.buku.show',compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('pages.buku.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $buku = Buku::findOrFail($id);

        $buku -> update($request->all());

        return redirect()->route('buku.index')->with('success','Buku Berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success','Buku Berhasil di hapus');   
    }
    public function peminjam(Request $request)
    {
        dd ($request->all());
        Buku::create($request->all());
    }
}
