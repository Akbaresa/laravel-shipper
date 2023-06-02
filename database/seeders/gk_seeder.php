<?php

namespace Database\Seeders;

use App\Models\gudang_khusus as gk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class gk_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wks = [
            [
                'lokasi' => 'gresik',
                'suhu' => '24',
                'tipe' => 'logistik',
                'harga' => 19000,
            ],
            [
                'lokasi' => 'sidoarjo',
                'suhu' => '24',
                'tipe' => 'bahan baku',
                'harga' => 109201,
            ],
            [
                'lokasi' => 'surabaya',
                'suhu' => '30',
                'tipe' => 'cross docking',
                'harga' => 109201,
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Insert data produk ke dalam tabel products
        foreach ($wks as $wk) {
            gk::create($wk);
        }
    }
}
