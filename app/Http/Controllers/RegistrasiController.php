<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;


// Menghubungkan ke file konfigurasi Midtrans

class RegistrasiController extends Controller
{
    public function show()
    {
        return view('regis',[

        ]);
    }

    public function store(Request $request)
    {
    $validasiData = $request->validate([
            'nama' =>['required'  , 'max:255' ],
            'alamat' => ['required' , 'max:255'],
            'email' => ['required' , 'email' , 'unique:users'],
            'notlp' => ['required' , 'max:12' , 'unique:users'],
            'password' => ['required' ,'required_with:password_konfirmasi','same:password_konfirmasi'],
            'role' => 'required'
        ]);

        $validasiData['password'] = bcrypt($validasiData['password']);
        $user = User::create($validasiData);

        
        $request = session();
        $request->flash('berhasil', 'Registrasi Berhasil! Silahkan verifikasi email');

        // return redirect('/login')->with('berhasil', 'Registrasi Berhasil! Silahkan login');

        event(new Registered($user));
        //mengisi reservasi 
        auth()->login($user);
        $userStore = auth()->id();
        $reservasi = new Reservasi();
        $reservasi->user_id = $userStore;
        $reservasi->save();

        return redirect()->route('verification.notice')
        ->with('succes' , 'Akun berhasil di registrasi! Silah kan verifikasi email anda');

    }
}
