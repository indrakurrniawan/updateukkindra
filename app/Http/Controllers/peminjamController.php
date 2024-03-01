<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\peminjam;

class peminjamController extends Controller
{
    public function peminjam(Request $request)
    {
        $buku=Buku::all();
        return view('peminjam',compact('buku'));
        Buku::create($request->all());
    
        
    }  

    public function jam(Request $request)
    {
        dd ($request->all());
        Buku::create($request->all());
        return redirect()->route('pinjam')->with('success','Buku Berhasil di Tambahkan');
    }


}
