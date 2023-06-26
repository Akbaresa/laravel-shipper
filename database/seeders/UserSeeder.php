<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {            

        $wks = [
            [
                'nama' => 'esa',
                'alamat' => 'menganti',
                'email' => 'esa@gmail.com',
                'notlp' => '0851206676977',
                'password' => '12345',
                'password_konfirmasi' => '12345',
                'role' => 'admin',
                'email_verified_at' => '2022-08-02 08:22:22',
            ],
            [
                'nama' => 'Dimas',
                'alamat' => 'krian',
                'email' => 'dimas@gmail.com',
                'notlp' => '085136676977',
                'password' => '12345',
                'password_konfirmasi' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [
                'nama' => 'teguh',
                'alamat' => 'menganti',
                'email' => 'teguh@gmail.com',
                'notlp' => '085836676977',
                'password' => '12345',
                'password_konfirmasi' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [
                'nama' => 'akbar',
                'alamat' => 'menganti',
                'email' => 'akbar@gmail.com',
                'notlp' => '085836675647',
                'password' => '12345',
                'password_konfirmasi' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
    
            
        ];

        // Insert data produk ke dalam tabel products
        foreach ($wks as $wk) {
            User::create($wk);
        }
    }
}