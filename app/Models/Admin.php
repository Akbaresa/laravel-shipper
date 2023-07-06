<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class Admin extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public final function searchUsers($request){
        try {
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
            return $users;    
        } catch (QueryException $e) {
            return $e;
        }
    }
    public function totalUsers(){
        try {
            $total_users = User::where('users.role', 'user')
            ->count();

            return $total_users;
        }catch (QueryException $e) {
            return 0;
        }
    }
    public function uangToday( $currentDate){
        try {
            $uangToday = DB::table('sewas')
            ->leftJoin('gudang_khususes', 'gudang_khususes.id', '=', 'sewas.gk_id')
            ->where('sewas.tgl_byr' , $currentDate)
            ->count();

            return $uangToday;
        }catch (QueryException $e) {
            return 0;
        }
    }
    public function sewaToday( $currentDate){
        try {
            $sewa_today = DB::table('sewas')
            ->leftJoin('gudang_khususes', 'gudang_khususes.id', '=', 'sewas.gk_id')
            ->where('sewas.tgl_byr', $currentDate)
            ->value('gudang_khususes.harga_sewa');

            return $sewa_today;
        }catch (QueryException $e) {
            return $e;
        }
    }
    public function sewaAll(){
        try {
            $sewa_all = DB::table('sewas')
            ->leftJoin('gudang_khususes', 'gudang_khususes.id', '=', 'sewas.gk_id')
            ->where('sewas.status', 'lunas')
            ->value('gudang_khususes.harga_sewa');
            return $sewa_all;
        }catch (QueryException $e) {
            return $e;
        }
    }


    public function detailUsers($user){
        try {
        
            $users = DB::table('users')
            ->select('nama', 'alamat', 'notlp', 'email' , 'id')
            ->where('users.role', 'user')
            ->where('users.nama', $user->nama)
            ->first();
            return $users;
        }catch (QueryException $e) {
            return $e;
        }
    }
    public function detailSewa($user){
        try {
        
            $sewa = DB::table('sewas')
            ->select('nama_toko', 'id' , 'alamat_toko' , 'tanggal_pengambilan',
            'lokasi_pengambilan', 'tipe_barang', 'total_berat', 'status' , 'tgl_byr' , 'gk_id'
            )
            ->where('user_id', $user->id)
            ->first();
            return $sewa;
        }catch (QueryException $e) {
            return $e;
        }
    }
    public function detailGudang($sewa){
        try {
        
            $gudang = GudangKhusus::select('lokasi', 'suhu', 'harga_sewa', 'total_ruangan', 'luas')
            ->where('id', $sewa->gk_id)
            ->first();
            return $gudang;
        }catch (QueryException $e) {
            return $e;
        }
    }


    public function getInputSewa($request){
        try {
            $sewa_id = $request->input('sewa');
            return $sewa_id;
        }catch (QueryException $e) {
            return $e;
        }
    }

    public function getUserId($id){
        try {
            $user = User::findOrFail($id);
            return $user;
        }catch (QueryException $e) {
            return $e;
        }
    }
    public function totalAkunSewa():int{
        try {
            $total = DB::table('sewas')
            ->join('users', 'users.id', '=', 'sewas.user_id')
            ->where('users.role',  'user')
            ->count();
            return $total;
        }catch (QueryException $e) {
            return $e;
        }
    }
    public function getSewaId($id){
        try {
            $sewa = Sewa::findOrFail($id);
            return $sewa;
        }catch (QueryException $e) {
            return $e;
        }
    }
    public function updateUser($request , $user){
        try {
            $updateUser = $user->update($request->all());
            return $updateUser;
        }catch (QueryException $e) {
            return $e;
        }
    }
    public function updateSewa($request , $sewa){
        try {
            $updateSewa = $sewa->update($request->all());
            return $updateSewa;
        }catch (QueryException $e) {
            return $e;
        }
    }


}
