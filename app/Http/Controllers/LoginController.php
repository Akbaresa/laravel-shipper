<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function show()
    {
        return view('login',[

        ]);
    }
    public function auth(Request $request)
    {
        $credential =  $request->validate([
            'email' => ['required' , 'email:dns' ],
            'password' => ['required' , 'min:5' ]
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('error' , 'Login tidak berhasil');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
