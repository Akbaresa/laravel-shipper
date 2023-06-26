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
        // $table->string('nama_toko');
        // $table->text('alamat_toko');
        // $table->text('lokasi_pengambilan');
        // $table->string('total_berat');
        // $table->string('tipe_barang');
        // $table->date('tanggal_pengambilan');
        $sewa = [
            [
                'nama_toko' => 'dimas store',
                'user_id' => 2,
                'gk_id' =>1,
                'alamat_toko' => 'krian',
                'lokasi_pengambilan' => 'gresik',
                'total_berat' => '>100kg',
                'tipe_barang' => 'elektronik',
                'tanggal_pengambilan' => '2023-06-11',
                'status' => 'unpaid'
            ]
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Insert data produk ke dalam tabel products
        foreach ($sewa as $a) {
            Sewa::create($a);
        }
    }
}
