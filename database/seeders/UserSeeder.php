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
                'role' => 'admin',
                'email_verified_at' => '2022-08-02 08:22:22',
            ],
            [   
                'nama' => 'Dimas',
                'alamat' => 'krian',
                'email' => 'dimas@gmail.com',
                'notlp' => '085136676977',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [
                'nama' => 'teguh',
                'alamat' => 'menganti',
                'email' => 'teguh@gmail.com',
                'notlp' => '085836676977',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [
                'nama' => 'akbar',
                'alamat' => 'menganti',
                'email' => 'akbar@gmail.com',
                'notlp' => '085836675647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //4
                'nama' => 'ardiman',
                'alamat' => 'sidoarjo',
                'email' => 'ardiman@gmail.com',
                'notlp' => '085876675647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //5
                'nama' => 'ajeng',
                'alamat' => 'demak',
                'email' => 'ajeng@gmail.com',
                'notlp' => '096276675647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //6
                'nama' => 'citra',
                'alamat' => 'bungkuil',
                'email' => 'citra@gmail.com',
                'notlp' => '096987675647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //7
                'nama' => 'candra',
                'alamat' => 'tlogobedah',
                'email' => 'candra@gmail.com',
                'notlp' => '096987987647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //8
                'nama' => 'rani',
                'alamat' => 'Jl demak',
                'email' => 'rani@gmail.com',
                'notlp' => '091287762647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   // 9
                'nama' => 'denji',
                'alamat' => 'gang fuji',
                'email' => 'denji@gmail.com',
                'notlp' => '096987934647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //10
                'nama' => 'adagaki',
                'alamat' => 'jl daichi',
                'email' => 'adagaki@gmail.com',
                'notlp' => '096987129647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //11
                'nama' => 'benimaru',
                'alamat' => 'ochita',
                'email' => 'benimaru@gmail.com',
                'notlp' => '096987712947',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //12
                'nama' => 'mujiwara',
                'alamat' => 'jl osaka',
                'email' => 'mujiwara@gmail.com',
                'notlp' => '096987982647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //13
                'nama' => 'kaori',
                'alamat' => 'prefektur yamaguchi',
                'email' => 'kaori@gmail.com',
                'notlp' => '096987762647',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //14
                'nama' => 'chizuru',
                'alamat' => 'oita',
                'email' => 'chizuru@gmail.com',
                'notlp' => '098747485912',
                'password' => '12345',
                'role' => 'user',
                'email_verified_at' => '2022-08-02 08:22:22',
                
            ],
            [   //15
                'nama' => 'yoshimaru',
                'alamat' => 'fukuoka',
                'email' => 'yoshiaru@gmail.com',
                'notlp' => '096980912647',
                'password' => '12345',
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