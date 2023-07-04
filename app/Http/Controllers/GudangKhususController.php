<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use App\Models\Sewa;
use App\Models\gudangKhusus;
use App\Models\TipeGudang;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;



class GudangKhususController extends Controller
{
    
    public function index($id, TipeGudang $TipeGudang){
      $slug = $TipeGudang->slug;
      $gudang = gudangKhusus::where('slug', $id)->first();
        $branches = gudangKhusus::all();
        $apiWa = "https://api.whatsapp.com/send?phone=+62812-3598-1551&text=";
        if(auth()){
          $chatCust = $apiWa . "Halo,%20perkenalkan%20nama%20saya%20" . auth()?->user()?->nama.  "%20saya%20mencari%20gudang untuk%20disewa";
        }
        return view('Users.gudangKhusus', [
          'chat' => $chatCust,
          'branches' => $branches,
          'gudang' => $gudang,
          'slug' => $slug,
        ]);
    }

    public function show($id , TipeGudang $TipeGudang){
      $slug = $TipeGudang->slug;
      $gudang = gudangKhusus::where('slug', $id)->first();
      $gudangKhusus = gudangKhusus::first();
      return view('Users.sewaGudangKhusus',[
        "gks" => $gudang,
        'slug' => $slug,
      ]);
    }



    public function store(Request $request)
    {
      $validasiData = $request->validate([
            'nama_toko' =>['required'  , 'max:255' ],
            'alamat_toko' => ['required'],
            'lokasi_pengambilan' => ['required' ],
            'tanggal_pengambilan' => ['required'],
            'tipe_barang' => ['required'],
            'total_berat' => ['required'],
            'user_id' => ['required'],
            'gk_id' => ['required'],
        ]);
        $sewa = Sewa::create($validasiData);
        $gk_id = $request->gk_id;
        $gudang = gudangKhusus::where('id', $gk_id)->first();

        \Midtrans\Config::$serverKey = config('Midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => $sewa->id ,
                'gross_amount' => $gudang->harga_sewa,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->nama,
                'last_name' => "",
                'email' =>auth()->user()->email,
                'phone' => auth()->user()->notlp,
            ),
        );
        $snapToken = Snap::getSnapToken($params);
        return view('Users.kontrakGudangKhusus', [
          'sewa' => $sewa,
          'gk' => $gudang,
          'snaptoken' => $snapToken
        ]);
    }

    public function callback(Request $request){
      $serverKey = config('Midtrans.server_key');
      $hashed = hash('sha512', $request->order_id.$request->status_code.$request->gross_amount.$serverKey);
      $currentDate = Carbon::today()->format('Y-m-d');
      if($hashed == $request->signature_key){
        if($request->transaction_status == 'capture'){
          $order = Sewa::find($request->order_id);
          $order->update([
            'status' => 'lunas',
            'tgl_byr' => $currentDate
          ]);
        }
      }
    }


    public function cetak(){
      $currentDate = Carbon::today()->format('d-m-Y');
      $nextWeek = Carbon::today()->addDays(7)->toDateString();
      $user_id = auth()->user()->id;
      $sewa = Sewa::where('user_id', $user_id)->first();
      $gudangKhusus = gudangKhusus::first();
      return view('Users.cetakForm', [
        'currentDate' => $currentDate ,
        'nextWeek' => $nextWeek,
        'sewa' => $sewa,
        'gks' => $gudangKhusus
      ]);
    }

    public function showTipe(){
      $tipeGudangs = TipeGudang::all();
      return view('gudang.tipeGudangKhusus',[
        'tipeGudangs' => $tipeGudangs
      ]);
    }

    public function detailTipeGudang(TipeGudang $TipeGudang){
      $slug = $TipeGudang->slug;
      $tipeGudangs = DB::table('gudang_khususes')
      ->leftJoin('tipe_gudangs', 'tipe_gudangs.id', '=', 'gudang_khususes.tipe_gk_id')
      ->select('gudang_khususes.lokasi', 'gudang_khususes.harga_sewa', 'gudang_khususes.nama' ,
      'gudang_khususes.total_ruangan', 'gudang_khususes.suhu' , 'gudang_khususes.luas', 'gudang_khususes.slug')
      ->where('tipe_gudangs.slug', $TipeGudang->slug)
      ->get();
      $allTipe = TipeGudang::all();
      
      return view('gudang.detailTipe',[
        'gudangs' => $tipeGudangs,
        'slug' => $slug,
        'allGudang' => $allTipe
      ]);
    }
    public function formatRupiah($nilai){
      return 'Rp ' . number_format($nilai, 0, ',', '.');
    }
}
