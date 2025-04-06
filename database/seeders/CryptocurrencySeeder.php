<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cryptocurrency;

class CryptocurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Cryptocurrency::create([
            'Crypto_name' => 'Bitcoin',
            'Symbol' => 'BTC',
            'Price' => '600.00',
            'Description' => 'เป็นสกุลเงินดิจิทัลที่ใช้สำหรับการชำระค่าสินค้าและบริการ และเป็นสินทรัพย์สำหรับการลงทุน'
        ]);

        Cryptocurrency::create([
            'Crypto_name' => 'Ethereum',
            'Symbol' => 'ETH',
            'Price' => '800.00',
            'Description' => 'ใช้สำหรับการพัฒนาแอปพลิเคชันที่ทำงานบน Ethereum Blockchain ผ่าน Smart Contracts'
        ]);

        Cryptocurrency::create([
            'Crypto_name' => 'XRP',
            'Symbol' => 'XRP',
            'Price' => '300.00',
            'Description' => 'เน้นการใช้งานในภาคการเงินสำหรับการโอนเงินระหว่างประเทศที่รวดเร็วและมีค่าธรรมเนียมต่ำ โดยไม่จำเป็นต้องผ่านธนาคาร'
        ]);

        Cryptocurrency::create([
            'Crypto_name' => 'Dogecoin',
            'Symbol' => 'DOGE',
            'Price' => '1000.00',
            'Description' => 'เริ่มต้นจากการเป็น "เหรียญล้อเลียน" หรือ meme coin แต่ก็ได้รับความนิยมในบางกลุ่มผู้ใช้ เนื่องจากค่าธรรมเนียมต่ำและใช้สำหรับการทิปหรือบริจาคในอินเทอร์เน็ต'
        ]);
    }
}