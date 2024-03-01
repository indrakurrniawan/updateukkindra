<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FassController extends Controller
{
    function index()
    {
        return view('login');
        
    }
    function login(Request $request)
    {
        $request->validate([
           'email'=> 'required',
           'password'=>'required',
        ],[
            
            'email.required'=>'email wajib di isi',
            'password.required'=>'password wajib di isi'
            
        ]);

        $infologin = [
            'email' => $request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role =='administrator'){
                return redirect('admin/administrator');
            }elseif(Auth::user()->role =='petugas'){
                return redirect('/buku');
            }elseif(Auth::user()->role =='peminjam'){
                return redirect('/peminjam');
            }

        } else {
            
            return redirect('')->withErrors('Username Dan Password Tidak Sesuai')->withInput();
        }


    }

    function logout()
    {
        Auth::logout();
        return redirect('');
    }
} 


