<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Sewa;
use App\Models\gudangKhusus;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = DB::table('users')
        ->leftJoin('sewas', 'users.id', '=', 'sewas.user_id')
        ->select('users.nama', 'users.alamat', 'users.notlp' , 'users.email', 'sewas.nama_toko',
        'sewas.alamat_toko', 'sewas.tanggal_pengambilan' , 'sewas.created_at')
        ->where('users.role', 'user')
        ->paginate(5);
        
        if ($request->has('search')){
            $users = DB::table('users')
            ->leftJoin('sewas', 'users.id', '=', 'sewas.user_id')
            ->select('users.nama', 'users.alamat', 'users.notlp' , 'users.email', 'sewas.nama_toko',
            'sewas.alamat_toko', 'sewas.tanggal_pengambilan' , 'sewas.created_at')
            ->where('users.role', 'user')
            ->where('nama', 'LIKE' , '%' . $request->search . '%')
            ->paginate(5);
        }else {
            $users = DB::table('users')
            ->leftJoin('sewas', 'users.id', '=', 'sewas.user_id')
            ->select('users.nama', 'users.alamat', 'users.notlp' , 'users.email', 'sewas.nama_toko',
            'sewas.alamat_toko', 'sewas.tanggal_pengambilan' , 'sewas.created_at')
            ->where('users.role', 'user')
            ->paginate(5);
        }

        $total_users = User::where('users.role', 'user')
        ->count();
        $currentDate = Carbon::today()->format('Y-m-d');
        $total_sewa = Sewa::count();
        $uangToday = DB::table('sewas')
        ->leftJoin('gudang_khususes', 'gudang_khususes.id', '=', 'sewas.gk_id')
        ->where('sewas.tgl_byr' , $currentDate)
        ->count();
        $sewa_today = DB::table('sewas')
        ->leftJoin('gudang_khususes', 'gudang_khususes.id', '=', 'sewas.gk_id')
        ->where('sewas.tgl_byr', $currentDate)
        ->value('gudang_khususes.harga_sewa');
        $sewa_all = DB::table('sewas')
        ->leftJoin('gudang_khususes', 'gudang_khususes.id', '=', 'sewas.gk_id')
        ->where('sewas.status', 'lunas')
        ->value('gudang_khususes.harga_sewa');
        $t_uang_today = $uangToday * $sewa_today;
        $pendapatanAll = $total_sewa * $sewa_all;
        $uangToday = $this->formatRupiah($t_uang_today);
        $pendapatanAll = $this->formatRupiah($pendapatanAll);
        return view('Admin.admin',([
            'users' => $users,
            'total_users' => $total_users,
            'currentDate' => $currentDate,
            'total_sewa'=> $total_sewa,
            'uang_today' => $uangToday,
            'pendapatanAll' => $pendapatanAll
        ]));
        
    }

    function formatRupiah($nilai){
    return 'Rp ' . number_format($nilai, 0, ',', '.');
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
        'lokasi_pengambilan', 'tipe_barang', 'total_berat', 'status' , 'tgl_byr' , 'gk_id'
        )
        ->where('user_id', $user->id)
        ->first();
        
        $gudang = GudangKhusus::select('lokasi', 'suhu', 'harga_sewa', 'total_ruangan', 'luas')
        ->where('id', $sewa->gk_id)
        ->first();
       

        
        return view('Admin.detail' , [
            'user' => $users,
            'sewa' => $sewa,
            'gudang' => $gudang
        ]);
    }

    public function update(Request $request, $id){
       $sewa_id = $request->input('sewa');
    
        $user = User::findOrFail($id);
        
        $updateUser = $user->update($request->all());
        
        $sewa = Sewa::findOrFail($sewa_id);

        $updateSewa = $sewa->update($request->all());
        if ($updateSewa or $updateUser){            
            return redirect(route('admin.detail', $user->nama))
            ->with('succes', 'berhasil update');
        };
        
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
