<?php

namespace Database\Seeders;

use App\Models\TipeGudang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeGudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tgs = [
            [
                'nama' => 'Cross-Docking',
                'slug' => 'cross-docking',
                'excerpt' => 'Gudang cross-docking biasanya digunakan oleh jasa ekspedisi sebagai tempat pemindahan muatan dari satu truk ke truk yang lainnya. Gudang ini juga sering disebut sebaga gudang transit'
            ],
            [
                'nama' => 'Transhipment',
                'slug' => 'transhipment',
                'excerpt' => 'Gudang ini hampir mirip dengan gudang cross-docking/gudang transit. Namun yang membedakan adalah fungsinya. Gudang ini dibangun dengan tujuan memproses barang produksi sebelum dikirimkan langsung ke pasar tujuan.'
            ],
            [
                'nama' => 'Sortir',
                'slug' => 'sortir',
                'excerpt' => 'Gudang pusat sortir lebih banyak digunakan oleh penyedia jasa ekspedisi untuk melakukan pembagian barang berdasarkan lokasi/kode pos tujuan pengiriman barang. Setelah disortir, barulah barang dikirim sesuai tujuan masing-masing.'
            ],

        ];
        foreach ($tgs as $t){
          TipeGudang::create($t);  
        }
    }
}
