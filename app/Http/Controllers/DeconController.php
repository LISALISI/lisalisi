<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeconController extends Controller
{
    public function destroy_session(Request $request)
    {
        if(auth()->check()){
            return redirect('/dashboard');
        }else
        {
         Auth::guard('web')->logout();
         $request->session()->invalidate();
         $request->session()->regenerateToken();
         return redirect('/login');
        }

        // if($request->session()->has('key');Auth::user())



    }
}
