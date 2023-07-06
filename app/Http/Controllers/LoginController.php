<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Redirect;
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
            'password' => ['required' , 'min:5' ],
        ]);

        if (Auth::attempt($credential)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        } if ($request->user() instanceof MustVerifyEmail && !$request->user()->hasVerifiedEmail()) {
            return $request->expectsJson()
                ? abort(403, 'Your email address is not verified.')
                : Redirect::route('verification.notice')->with('status', 'Please verify your email address.');
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
