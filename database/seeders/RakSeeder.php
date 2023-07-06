<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $table->string('tipe');
        // $table->foreignId('barang_id');
        // $table->string('lokasi');
        // $table->string('ukuran');
        $raks = [
            [
                'tipe' => 'SELEKTIF PALLET RACKING' ,
                'lokasi' => 'A1',
                'gk_id' => 1,
                'ukuran' => '1 meter x 4 meter'
            ],
            [
                'tipe' => 'DOUBLE DEEP RACKING' ,
                'lokasi' => 'A1',
                'gk_id' => 2,
                'ukuran' => '2 meter x 4 meter'
            ],
            [
                'tipe' => 'SINGLE DEEP RACKING' ,
                'lokasi' => 'B1',
                'gk_id' => 3,
                'ukuran' => '3 meter x 4 meter'
            ],
            [
                'tipe' => 'CANTIVELER RACKING' ,
                'lokasi' => 'V3',
                'gk_id' => 4,
                'ukuran' => '1 meter x 10 meter'
            ],
            [
                'tipe' => 'DRIVE DEEP RACKING' ,
                'lokasi' => 'C1',
                'gk_id' => 5,
                'ukuran' => '4 meter x 4 meter'
            ],
            [
                'tipe' => 'MULTI TIER RACKING' ,
                'lokasi' => 'Y2',
                'gk_id' => 6,
                'ukuran' => '2 meter x 10 meter'
            ],

            ];
        foreach ($raks as $rak){
            Rak::create($rak);
        }
    }

}
