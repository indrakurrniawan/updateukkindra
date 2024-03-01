<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
   public function register()
    {
        return view ('Register');
    }
   public function registpost(Request $request)
    {
        $user = new User();
        
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make ($request->password);

        $user->save();

        return back()->with('success','Register suksess');

    }
}
