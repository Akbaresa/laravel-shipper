<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Sewa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')
        ->leftJoin('sewas', 'users.id', '=', 'sewas.user_id')
        ->select('users.nama', 'users.alamat', 'users.notlp' , 'users.email', 'sewas.nama_toko',
        'sewas.alamat_toko', 'sewas.tanggal_pengambilan' , 'sewas.created_at')
        ->where('users.role', 'user')
        ->get();
        $total_users = User::where('users.role', 'user')
        ->count();
        $total_sewa = Sewa::count();

        $uangToday = DB::table('sewas')
        ->leftJoin('gudang_khususes', 'gudang_khususes.id', '=', 'sewas.user_id')
        ->select('gudang_khususes.harga_sewa')
        
        ;
        return view('Admin.admin',compact('users' , 'total_users' , 'total_sewa'));
        
    }
    
    public function handle()
    {   
        $this->middleware('auth');
        if ( auth()->user()->role === 'admin') {
            return route('Admin');
        }else{
            return view('landing');
        }
        abort(403, 'Unauthorized'); // Jika pengguna bukan admin, lempar HTTP 403 Forbidden Error
    }


    public function detail(User $user)  {
        $users = DB::table('users')
        ->select('nama', 'alamat', 'notlp', 'email' , 'id')
        ->where('users.role', 'user')
        ->where('users.nama', $user->nama)
        ->first();
        
        $sewa = DB::table('sewas')
        ->select('nama_toko', 'id' , 'alamat_toko' , 'tanggal_pengambilan',
        'lokasi_pengambilan', 'tipe_barang', 'total_berat', 'status'
        )
        ->where('user_id', $user->id)
        ->first();

        $gudang = Sewa::join('gudang_khususes', 'sewas.gk_id', '=', 'gudang_khususes.id')
        ->select('gudang_khususes.lokasi', 'gudang_khususes.suhu' , 'gudang_khususes.harga_sewa'        ,          'gudang_khususes.total_ruangan','gudang_khususes.luas')
        ->first();
        // dd($gudang);   
       
        
        return view('Admin.detail' , [
            'user' => $users,
            'sewa' => $sewa,
            'gudang' => $gudang
        ]);
    }

    public function update(Request $request, $id){
       $sewa_id = $request->input('sewa');
       
        $user = User::findOrFail($id);
        
        $user->update($request->all());
        
        $sewa = Sewa::findOrFail($sewa_id);
    
        $sewa->update($request->all());
        
        
        return redirect(route('admin.detail', $user->nama))
        ->with('succes', 'berhasil update');
    }
    public function delete($id){
        
        $user = User::findOrFail($id);
        $user->delete();

        return redirect(route('admin.dashboard'))
        ->with('succes', 'akun berhasil di hapus');
    }

    public function search(Request $request){
        if ($request->has('search')){
            $users = DB::table('users')
            ->leftJoin('sewas', 'users.id', '=', 'sewas.user_id')
            ->select('users.nama', 'users.alamat', 'users.notlp' , 'users.email', 'sewas.nama_toko',
            'sewas.alamat_toko', 'sewas.tanggal_pengambilan' , 'sewas.created_at')
            ->where('users.role', 'user')
            ->where('nama', 'LIKE' , '%' . $request->search . '%')
            ->get();
        }else {
            $users = DB::table('users')
            ->leftJoin('sewas', 'users.id', '=', 'sewas.user_id')
            ->select('users.nama', 'users.alamat', 'users.notlp' , 'users.email', 'sewas.nama_toko',
            'sewas.alamat_toko', 'sewas.tanggal_pengambilan' , 'sewas.created_at')
            ->where('users.role', 'user')
            ->get();
        }
        return view('Admin.admin',compact('users'));
    }
}
