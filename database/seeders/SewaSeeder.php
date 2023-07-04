<?php

namespace Database\Seeders;

use App\Models\Sewa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sewa = [
            [
                'nama_toko' => 'dimas store',
                'user_id' => 2,
                'gk_id' =>1,
                'alamat_toko' => 'krian',
                'lokasi_pengambilan' => 'gresik',
                'total_berat' => '>100kg',
                'tipe_barang' => 'elektronik',
                'tanggal_pengambilan' => '2023-06-30',
                'status' => 'belum dibayar'
            ],
            [
                'nama_toko' => 'teguh store',
                'user_id' => 3,
                'gk_id' =>2,
                'alamat_toko' => 'krian',
                'lokasi_pengambilan' => 'surabaya',
                'total_berat' => '>100kg',
                'tipe_barang' => 'rumah tangga',
                'tanggal_pengambilan' => '2023-06-30',
                'tgl_byr' => '2023-06-30',
                'status' => 'lunas'
            ],
            [   //4 
                'nama_toko' => 'akbar jaya',
                'user_id' => 4,
                'gk_id' =>4,
                'alamat_toko' => 'menganti',
                'lokasi_pengambilan' => 'surabaya',
                'total_berat' => '>100kg',
                'tipe_barang' => 'elektronik',
                'tanggal_pengambilan' => '2023-06-30',
                'tgl_byr' => '2023-06-30',
                'status' => 'lunas'
            ],            
            [   //4 
                'nama_toko' => 'ardiman comp',
                'user_id' => 5,
                'gk_id' =>1,
                'alamat_toko' => 'krian',
                'lokasi_pengambilan' => 'surabaya',
                'total_berat' => '>100kg',
                'tipe_barang' => 'rumah tangga',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-06-30',
                'status' => 'lunas'
            ],            
            [   //5 
                'nama_toko' => 'ajeng shop',
                'user_id' => 6,
                'gk_id' =>5,
                'alamat_toko' => 'demak',
                'lokasi_pengambilan' => 'demak',
                'total_berat' => '>100kg',
                'tipe_barang' => 'elektronik',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],            
            [   //6
                'nama_toko' => 'ciputra',
                'user_id' => 7,
                'gk_id' =>9,
                'alamat_toko' => 'citraland',
                'lokasi_pengambilan' => 'surabaya',
                'total_berat' => '>100kg',
                'tipe_barang' => 'material',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],
            [   //7 
                'nama_toko' => 'nestle',
                'user_id' => 8,
                'gk_id' =>3,
                'alamat_toko' => 'joyoboyo',
                'lokasi_pengambilan' => 'surabaya',
                'total_berat' => '>100kg',
                'tipe_barang' => 'logistik',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],            
            [   //8 
                'nama_toko' => 'RANS E',
                'user_id' => 9,
                'gk_id' =>2,
                'alamat_toko' => 'demak',
                'lokasi_pengambilan' => 'surabaya',
                'total_berat' => '>100kg',
                'tipe_barang' => 'rumah tangga',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],
            [   //9 
                'nama_toko' => 'tokyo grup',
                'user_id' => 10,
                'gk_id' =>4,
                'alamat_toko' => 'mount fuji',
                'lokasi_pengambilan' => 'tokyo',
                'total_berat' => '>100kg',
                'tipe_barang' => 'elektronik',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],
            [   //10 
                'nama_toko' => 'suzuki',
                'user_id' => 11,
                'gk_id' =>8,
                'alamat_toko' => 'jl daichi',
                'lokasi_pengambilan' => 'daichi',
                'total_berat' => '>100kg',
                'tipe_barang' => 'industri',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],
            [   //11
                'nama_toko' => 'beni',
                'user_id' => 12,
                'gk_id' =>7,
                'alamat_toko' => 'keodan',
                'lokasi_pengambilan' => 'fukushima',
                'total_berat' => '>100kg',
                'tipe_barang' => 'rumah tangga',
                'tanggal_pengambilan' => '2023-07-12',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],
            [   //12 
                'nama_toko' => 'mujiwara comp',
                'user_id' => 13,
                'gk_id' =>5,
                'alamat_toko' => 'osaka',
                'lokasi_pengambilan' => 'jl osaka',
                'total_berat' => '>100kg',
                'tipe_barang' => 'industri',
                'tanggal_pengambilan' => '2023-07-20',
                'tgl_byr' => '2023-08-01',
                'status' => 'lunas'
            ],
            [   //13 
                'nama_toko' => 'kaori shop',
                'user_id' => 14,
                'gk_id' =>5,
                'alamat_toko' => 'yamaguchi',
                'lokasi_pengambilan' => 'maebashi',
                'total_berat' => '>100kg',
                'tipe_barang' => 'elektronik',
                'tanggal_pengambilan' => '2023-09-23',
                'tgl_byr' => '2023-08-12',
                'status' => 'lunas'
            ],
            [   //14 
                'nama_toko' => 'chizuru ball',
                'user_id' => 15,
                'gk_id' =>9,
                'alamat_toko' => 'oita',
                'lokasi_pengambilan' => 'oita',
                'total_berat' => '>100kg',
                'tipe_barang' => 'industri',
                'tanggal_pengambilan' => '2023-07-17',
                'tgl_byr' => '2023-07-01',
                'status' => 'lunas'
            ],
            
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Insert data produk ke dalam tabel products
        foreach ($sewa as $a) {
            Sewa::create($a);
        }
    }
}
