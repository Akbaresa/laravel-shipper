<?php

namespace Database\Seeders;

use App\Models\gudangKhusus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class gk_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gks = [
            [
                'nama' => 'gudang Maju jaya',
                'slug' => 'maju-jaya',
                'lokasi' => 'Jl KEBAGETAN, CIKARANG, JABAR',
                'luas' => '1200 meter persegi',
                'total_ruangan' => 22,
                'suhu' => '24',
                'gambar' => 'images/gudang/gudang_1.jpg',
                'tipe_gk_id' => 2,
                'harga_sewa' => 72000000,
            ],
            [
                'nama' => 'gudang Jaya Abadi',
                'slug' => 'jaya-abadi',
                'lokasi' => 'Jl YOKOHAMA, TOKYO, JEPANG',
                'luas' => '1910 meter persegi',
                'total_ruangan' => 32,
                'suhu' => '19',
                'gambar' => 'images/gudang/gudang_2.jpg',
                'tipe_gk_id' => 2,
                'harga_sewa' => 56000000,
            ],
            [
                'nama' => 'gudang Maha Esa',
                'slug' => 'maha-esa',
                'lokasi' => 'Jl ARIF RAHMAN, OSAKA, JEPANG',
                'luas' => '2000 meter persegi',
                'total_ruangan' => 34,
                'suhu' => '12',
                'gambar' => 'images/gudang/gudang_3.jpg',
                'tipe_gk_id' => 2,
                'harga_sewa' => 80000000,
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];
        $gkb = [
            [
                'nama' => 'gudang Soekarno',
                'slug' => 'soekarno',
                'lokasi' => 'Jl Sidowungu, Doms, Washington',
                'luas' => '1200 meter persegi',
                'total_ruangan' => 22,
                'suhu' => '24',
                'gambar' => 'images/gudang/gudang_4.png',
                'tipe_gk_id' => 1,
                'harga_sewa' => 85000000,
            ],
            [
                'nama' => 'gudang Hirohito',
                'slug' => 'hirohito',
                'lokasi' => 'Jl Penam, Kaliawen, Jatim',
                'luas' => '1910 meter persegi',
                'total_ruangan' => 32,
                'suhu' => '19',
                'gambar' => 'images/gudang/gudang_5.jpg',
                'tipe_gk_id' => 1,
                'harga_sewa' => 36400000,
            ],
            [
                'nama' => 'gudang manchester city',
                'slug' => 'manchester-city',
                'lokasi' => 'Jl Murai, Manchester, London',
                'luas' => '2000 meter persegi',
                'total_ruangan' => 12,
                'suhu' => '12',
                'gambar' => 'images/gudang/gudang_6.jpg',
                'tipe_gk_id' => 1,
                'harga_sewa' => 78000000,
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];

        $sortirs = [
            [
                'nama' => 'gudang Payung terbang',
                'slug' => 'payung-terbang',
                'lokasi' => 'Jl Tlogobedah, Menganti , Gresik',
                'luas' => '1090 meter persegi',
                'total_ruangan' => 25,
                'suhu' => '24',
                'gambar' => 'images/gudang/gudang_7.jpg',
                'tipe_gk_id' => 3,
                'harga_sewa' => 41000000,
            ],
            [
                'nama' => 'gudang Yoshinoya',
                'slug' => 'yoshinoya',
                'lokasi' => 'Jl Yoshinoya, kawashi, Prefectur hibachi',
                'luas' => '1231 meter persegi',
                'total_ruangan' => 32,
                'suhu' => '19',
                'gambar' => 'images/gudang/gudang_8.jpg',
                'tipe_gk_id' => 3,
                'harga_sewa' => 91000000,
            ],
            [
                'nama' => 'gudang KAI',
                'slug' => 'kai',
                'lokasi' => 'Jl himawari, muki, Prefectur okinawa',
                'luas' => '1000 meter persegi',
                'total_ruangan' => 34,
                'suhu' => '12',
                'gambar' => 'images/gudang/gudang_9.jpg',
                'tipe_gk_id' => 3,
                'harga_sewa' => 23000000,
            ],
            // Tambahkan data produk lainnya sesuai kebutuhan
        ];
        // Insert data produk ke dalam tabel products
        foreach ($gks as $wk) {
            gudangKhusus::create($wk);
        }
        foreach ($gkb as $gk) {
            gudangKhusus::create($gk);
        }
        foreach ($sortirs as $sortir) {
            gudangKhusus::create($sortir);
        }
    }
}
