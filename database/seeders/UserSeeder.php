<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;  // เพิ่มการใช้งาน Model User
use Illuminate\Support\Facades\Hash; // สำหรับการเข้ารหัส password

class UserSeeder extends Seeder
{
    public function run()
    {
        // การใช้ Eloquent Model เพื่อสร้างข้อมูลในตาราง user
        User::create([
            'Username' => 'Lingling Kwog',
            'Password' => Hash::make('123456'),  // ใช้ Hash เพื่อเข้ารหัสรหัสผ่าน
            'Email' => 'lingling@gmail.com',
            'Phone' => '0812345678',
            'Balance' => 5000.00
        ]);

        // เพิ่มข้อมูลผู้ใช้อื่นๆ
        User::create([
            'Username' => 'OrmmOrmm',
            'Password' => Hash::make('Unimydog'),
            'Email' => 'uniuni@gmail.com',
            'Phone' => '0822345678',
            'Balance' => 7000.00
        ]);

        User::create([
            'Username' => 'Karina',
            'Password' => Hash::make('jimin55'),
            'Email' => 'jimin@gmail.com',
            'Phone' => '066584524',
            'Balance' => 3000.00
        ]);

        User::create([
            'Username' => 'Winter',
            'Password' => Hash::make('nongwinter'),
            'Email' => 'jikjik@gmail.com',
            'Phone' => '096659636',
            'Balance' => 3000.00
        ]);

    }
}

