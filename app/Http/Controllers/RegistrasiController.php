<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

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
            'notlp' => ['required' , 'max:12'],
            'password' => ['required' , 'min:5'],
        ]);
        $validasiData['password'] = bcrypt($validasiData['password']);
        User::create($validasiData);

        $request = session();
        $request->flash('berhasil', 'Registrasi Berhasil! Silahkan login');

        return redirect('/login')->with('berhasil', 'Registrasi Berhasil! Silahkan login');

}
}
