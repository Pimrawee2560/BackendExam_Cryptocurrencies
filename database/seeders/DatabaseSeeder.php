<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // เรียกใช้งาน UserSeeder และ CryptocurrencySeeder
        $this->call([
            UserSeeder::class,
            CryptocurrencySeeder::class,
            TransactionSeeder::class,
        ]);
    }
}