<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use App\Models\Sewa;
use App\Models\gudang_khusus;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;

class GudangKhususController extends Controller
{
    
    public function index(){
        $branches = gudang_khusus::all();
        $apiWa = "https://api.whatsapp.com/send?phone=+62812-3598-1551&text=";
        if(auth()){
          $chatCust = $apiWa . "Halo,%20perkenalkan%20nama%20saya%20" . auth()?->user()?->nama.  "%20saya%20mencari%20gudang untuk%20disewa";
        }
        return view('Users.gudangKhusus', [
          'chat' => $chatCust,
          'branches' => $branches
        ]);
    }

    public function show(){
      $gudangKhusus = gudang_khusus::first();
      return view('Users.sewaGudangKhusus',[
        "gks" => $gudangKhusus
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
        $gudangKhusus = gudang_khusus::first();
        
        \Midtrans\Config::$serverKey = config('Midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => $sewa->id ,
                'gross_amount' => $gudangKhusus->harga_sewa,
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
          'gk' => $gudangKhusus,
          'snaptoken' => $snapToken
        ]);
    }

    public function callback(Request $request){
      $serverKey = config('Midtrans.server_key');
      $hashed = hash('sha512', $request->order_id.$request->status_code.$request->gross_amount.$serverKey);

      if($hashed == $request->signature_key){
        if($request->transaction_status == 'capture'){
          $order = Sewa::find($request->order_id);
          $order->update(['status' => 'lunas']);
        }
      }
    }


    public function cetak(){
      $currentDate = Carbon::today()->format('d-m-Y');
      $nextWeek = Carbon::today()->addDays(7)->toDateString();
      $user_id = auth()->user()->id;
      $sewa = Sewa::where('user_id', $user_id)->first();
      $gudangKhusus = gudang_khusus::first();
      return view('Users.cetakForm', [
        'currentDate' => $currentDate ,
        'nextWeek' => $nextWeek,
        'sewa' => $sewa,
        'gks' => $gudangKhusus
      ]);
    }
}
