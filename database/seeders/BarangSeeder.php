<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangs = [
            [
                'nama' => 'kipas',
                'stok' => 4,
                'tipe' => 'elektronik',
                'berat' => '20 gram'
            ],
            [
                'nama' => 'laptop',
                'stok' => 20,
                'tipe' => 'elektronik',
                'berat' => '120 gram'
            ],
            [
                'nama' => 'meja portable',
                'stok' => 18,
                'tipe' => 'industri',
                'berat' => '500 gram'
            ],
            [
                'nama' => 'buku',
                'stok' => 120,
                'tipe' => 'industri',
                'berat' => '120 gram'
            ],          
            [
                'nama' => 'sapu',
                'stok' => 200,
                'tipe' => 'rumah tangga',
                'berat' => '200 gram'
            ],  
            [
                'nama' => 'headset',
                'stok' => 20,
                'tipe' => 'elektronik',
                'berat' => '340 gram'
            ],
            [
                'nama' => 'gelas',
                'stok' => 110,
                'tipe' => 'rumah tangga',
                'berat' => '120 gram'
            ],
        ];
        foreach ($barangs as $barang){
            Barang::create($barang);
        }
    }
}
