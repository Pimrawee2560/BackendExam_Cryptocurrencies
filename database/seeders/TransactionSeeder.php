<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cryptocurrency;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // สร้างข้อมูลธุรกรรมการซื้อ
        // ธุรกรรม 1
        $price = Cryptocurrency::find(3)->Price;  // ดึงราคาของเหรียญที่มี ID = 3
        Transaction::create([
            'User_ID' => 1,               // ไอดีผู้ใช้
            'Crypto_ID' => 3,             // ไอดีเหรียญที่ทำการเลือกซื้อ
            'Transaction_type' => 'buy',  // ประเภทของธุรกรรม จะแบ่งเป็น Buy Sell Tranfer
            'Amount' => 5,                // จำนวนเหรียญที่ซื้อ
            'Price' => $price,            // ราคาเหรียญที่ดึงจากตาราง cryptocurrencies
            'Transaction_date' => now(),  // วันที่และเวลา (ใช้เวลาปัจจุบัน)
            'Status' => 'success',        // สถานะของธุรกรรม มี success pending failed 
        ]);

        // ธุรกรรมเพิ่มเติม  T_T
        $price = Cryptocurrency::find(1)->Price;  // ดึงราคาของเหรียญที่มี ID = 1 (Bitcoin)
        Transaction::create([
            'User_ID' => 2,               
            'Crypto_ID' => 1,           
            'Transaction_type' => 'buy',  
            'Amount' => 5,                
            'Price' => $price,            
            'Transaction_date' => now(),  
            'Status' => 'success',       
        ]);

   
        $price = Cryptocurrency::find(3)->Price;  
        Transaction::create([
            'User_ID' => 3,               
            'Crypto_ID' => 3,             
            'Transaction_type' => 'buy',  
            'Amount' => 2,             
            'Price' => $price,            
            'Transaction_date' => now(),  
            'Status' => 'pending',       
        ]);

    
        $price = Cryptocurrency::find(1)->Price;  
        Transaction::create([
            'User_ID' => 2,               
            'Crypto_ID' => 1,             
            'Transaction_type' => 'sell', 
            'Amount' => 1,                
            'Price' => $price,         
            'Transaction_date' => now(),  
            'Status' => 'pending',        
        ]);

        // ธุรกรรม 5
        $price = Cryptocurrency::find(3)->Price;  
        Transaction::create([
            'User_ID' => 1,              
            'Crypto_ID' => 3,             
            'Transaction_type' => 'transfer',  
            'Amount' => 2,             
            'Price' => $price,         
            'Transaction_date' => now(),  
            'Status' => 'pending',        
        ]);

        // ธุรกรรม 6
        $price = Cryptocurrency::find(3)->Price; 
        Transaction::create([
            'User_ID' => 3,               
            'Crypto_ID' => 3,             
            'Transaction_type' => 'buy',  
            'Amount' => 2,               
            'Price' => $price,         
            'Transaction_date' => now(),  
            'Status' => 'pending',        
        ]);
        dd('Transaction created');
    }
}
