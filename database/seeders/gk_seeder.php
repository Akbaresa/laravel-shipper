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
        // $table->string("lokasi");
        // $table->string("luas");
        // $table->string("total_ruangan");
        // $table->string("suhu");
        // $table->string("harga_sewa");
        $gks = [
            [
                'lokasi' => 'JL KEBAGETAN, CIKARANG, JABAR',
                'luas' => '1200 meter persegi',
                'total_ruangan' => 22,
                'suhu' => '24',
                'harga_sewa' => 720000,
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        // Insert data produk ke dalam tabel products
        foreach ($gks as $wk) {
            gk::create($wk);
        }
    }
}
