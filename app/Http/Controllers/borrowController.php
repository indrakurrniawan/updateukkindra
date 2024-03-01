<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Buku as ModelsBuks;

class borrowController extends Controller
{
    function pinjam()
    {
        $huhu=Buku::all();
        return view('pinjam',compact('huhu'));
    }
    function laporan()
    {
        $bukus = ModelsBuks::all();
        return view('laporanbuku',compact('bukus'));
    }
    
}
