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
      $request->request->add([
        'status' => 'unpaid'
      ]);
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
        $sewa_id = $sewa->id;
         //mengisi reservasi 
        $user_id = auth()->user()->id;
        $reservasi = Reservasi::where('user_id', $user_id)->first();

        if ($reservasi) {
          $reservasi->sewa_id = $sewa_id;
          $reservasi->save();
        }
        return redirect()->route('gudang-khusus.sewa');
    }

    public function sewa(){
      $gudangKhusus = gudang_khusus::first();
      $user_id = auth()->user()->id;
      $sewa = Sewa::where('user_id', $user_id)->first();



      \Midtrans\Config::$serverKey = config('Midtrans.server_key');
      \Midtrans\Config::$isProduction = false;
      \Midtrans\Config::$isSanitized = true;
      \Midtrans\Config::$is3ds = true;
      // $harga = DB::table('gudang_khususes')
      //         ->select('harga_sewa')
      //         ->first();
      // $sewa_id = DB::table('sewas')
      //         ->select('sewa_id');

      $params = array(
          'transaction_details' => array(
              'order_id' => $user_id  ,
              'gross_amount' => $gudangKhusus->harga_sewa,
          ),
          'customer_details' => array(
              'name' => auth()->user()->nama,
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
