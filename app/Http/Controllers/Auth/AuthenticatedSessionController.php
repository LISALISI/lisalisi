<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{


// protected function redirectTo(){
//     if (Auth::user()->niveau == 1) {
//         return 'index';
//         }
//         else{
//             return ('/');
//         }

// }


    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    // public function index(){
    //     $data=Employee::select('id','created_at')->get()->groupBy(function($data){
    //         return Carbon::parse($data->created_at)->format('M');
    //     });

    //     $months=[];
    //     $monthCount=[];
    //     foreach($data as $month => $values){
    //         $months[]=$month;
    //         $monthCount[]=count($values);
    //     }

    //     return view('index',['data'=>$data,'months'=>$months,'monthCount'=>$monthCount]);
    //    // return view('index');
    // }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
