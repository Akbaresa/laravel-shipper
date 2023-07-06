<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Sewa;
use App\Models\gudangKhusus;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class AdminController extends Controller
{
    public function index(Request $request , Admin $admin)
    {
        $users = $admin->searchUsers($request);
        $total_users = $admin->totalUsers();
        $currentDate = Carbon::today()->format('Y-m-d');
        $total_sewa = $admin->totalAkunSewa();
        $uangToday  = $admin->uangToday($currentDate);
        $sewa_today = $admin->sewaToday($currentDate);
        $sewa_all = $admin->sewaAll();
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
            'pendapatanAll' => $pendapatanAll,
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
            return view('/');
        }
        abort(403, 'Unauthorized'); // Jika pengguna bukan admin, lempar HTTP 403 Forbidden Error
    }


    public function detail(User $user, Admin $admin)  {
        $users = $admin->detailUsers($user);
        $sewa = $admin->detailSewa($user);
        $gudang = $admin->detailGudang($sewa);

        return view('Admin.detail' , [
            'user' => $users,
            'sewa' => $sewa,
            'gudang' => $gudang
        ]);
    }

    public function update(Request $request, $id , Admin $admin) {
        $sewa_id = $admin->getInputSewa($request);
        $userId = $admin->getUserId($id);
        $updateUser = $admin->updateUser($request , $userId);
        $sewaId = $admin->getSewaId($sewa_id);
        $updateSewa = $admin->updateSewa($request , $sewaId);
        
        if ($updateSewa or $updateUser){            
            return redirect(route('admin.detail', $userId->nama))
            ->with('succes', 'berhasil update');
        }
        
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
