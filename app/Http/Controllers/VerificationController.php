<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;



class VerificationController extends Controller
{
    public function notice()
    {
        return view('verify.resend');
    }
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        auth()->logout();
        return view('verify.berhasil');
    }
    public function resend(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return "email berhasil dikirim ulang";
    }
}
