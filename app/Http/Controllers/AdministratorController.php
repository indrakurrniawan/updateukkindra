<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class AdministratorController extends Controller
{
    function index ()
    {
           return view ('admin');
           $buku=Buku::all();
           return view ('admin',compact('buku'));
    }
    function administrator ()
    {
       return view ('admin');
       $buku=Buku::all();
       return view ('admin',compact('buku'));
    }
    function petugas ()
    {

       return view ('petugas');
      $buku=Buku::all();
       return view ('petugas',compact('buku'));  
    }
    function peminjam ()
    {
      $buku=Buku::all();
       return view ('pinjam',compact('huhu'));
        
    }
   
}
