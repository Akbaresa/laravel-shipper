<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Sewa;
use Illuminate\Support\Facades\DB;
use Termwind\Components\Dd;
use App\Http\Controllers\Auth;
class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->leftJoin('sewas', 'users.id', '=', 'sewas.user_id')
        ->select('users.nama', 'users.alamat', 'users.notlp' , 'users.email', 'sewas.nama_toko', 'sewas.alamat_toko', 'sewas.tanggal_pengambilan' , 'sewas.created_at')
        ->where('users.role', 'user')
        ->get();
        return view('Admin.admin',compact('users'));
        
    }
    
    public function handle()
    {   
        $this->middleware('auth');
        if ( auth()->user()->role === 'admin') {
            return route('admin');
        }else{
            return view('landing');
        }
        abort(403, 'Unauthorized'); // Jika pengguna bukan admin, lempar HTTP 403 Forbidden Error
    }


    public function detail(User $user)  {
        $users = DB::table('users')
        ->select('nama', 'alamat', 'notlp', 'email' )
        ->where('users.role', 'user')
        ->where('users.nama', $user->nama)
        ->first();
        
        $sewa = DB::table('sewas')
        ->select('nama_toko' , 'alamat_toko' , 'tanggal_pengambilan',
        'lokasi_pengambilan', 'tipe_barang', 'total_berat'
        )
        ->where('user_id', $user->id)
        ->first();

        $gudang = Sewa::join('gudang_khususes', 'sewas.gk_id', '=', 'gudang_khususes.id')
        ->select('gudang_khususes.lokasi', 'gudang_khususes.suhu' , 'gudang_khususes.harga_sewa' , 'gudang_khususes.total_ruangan','gudang_khususes.luas')
        ->first();
        // dd($gudang);   
        unset($user->id);
        
        return view('Admin.detail' , [
            'user' => $users,
            'sewa' => $sewa,
            'gudang' => $gudang
        ]);
    }
}
