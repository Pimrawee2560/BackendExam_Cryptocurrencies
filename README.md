# -Backend-exam-Crypto [ไฟล์ README.md แสดงขั้นตอนการ Run project]
[ex1] ให้ออกแบบระบบฐานข้อมูล(ทำเป็นรูปแบบ ER) ที่เป็นตัวกลางของการแลกเปลี่ยน Cryptocurrencies เช่น Bitcoin โดย สามารถนำเงิน Fiat (THB,USD) มาซื้อเหรียญ จาก User คนอื่นๆในระบบได้ และสามารถจะโอนเหรียญหากันภายในระบบ หรือ โอนหาคนอื่นภายนอกระบบได้ 
ยกตัวอย่าง https://c2c.binance.com/th/trade/buy/BTC

- ระบบสามารถตั้ง ซื้อ-ขาย Cryptocurrencies (BTC,ETH,XRP, DOGE)
- ระบบบันทึกการโอนเงินและซื้อ-ขายแลกเปลี่ยน
- ระบบมีการสร้างบัญชีผู้ใช้

***ex1 = โฟลเดอร์ views ไฟล์  ex1 ER.jpg (PATH:resources\views\ex1 ER.jpg)

[ex2] นำ ER Diagram จากข้อ 1 มาเขียนโดยใช้ Node.js หรือ PHP
-เขียน Method ใน Model เพื่อดึงข้อมูลของ Model อื่นๆที่ความสัมพันธ์กัน ตัวอย่าง https://laravel.com/docs/8.x/eloquent-relationships#one-to-many
-เขียน Controller และ Routing ในส่วนหลักๆของระบบ ไม่จำเป็นต้องทำทั้งหมด
-สร้างไฟล์สำหรับ Seed ข้อมูล เพื่อใช้ในการทดสอบ


db = .env
ตอนทำใช้  Apache MySQL เปิดโดย Xampp (จะใช้ตัวอื่นก็ได้)

***ขั้นตอนสร้าง Larabel***
1.ต้องติดตั้ง Laravel ก่อนตามคลิป https://www.youtube.com/watch?v=l4ee8GKyuLo&t=3634s&pp=ygUHbGVyYXZlbA%3D%3D
2. เปิด command Prompt
3. composer create-project --prefer-dist laravel/laravel excrypto
4. เข้าโฟลเดอร์ project พิม cd ตามด้วยที่อยู่ ตัวอย่างเช่น cd C:\xampp\htdocs\excrypto
4.พิม code . 
5.นำไฟล์ที่เกี่ยวข้องไปวางใน Laravel ที่สร้าง
.env

app\Http\Controllers\Controller.php
app\Http\Controllers\Controller.php
app\Http\Controllers\TransactionController.php
app\Http\Controllers\UserController.php
app\Http\Controllers\WalletController.php

app\Models\Cryptocurrency.php
app\Models\FiatTransaction.php
app\Models\Transaction.php
app\Models\User.php
app\Models\Wallet.php

database\migrations\2019_12_14_000001_create_personal_access_tokens_table.php
database\migrations\2025_04_05_033026_create_user_table.php
database\migrations\2025_04_05_033146_create_Cryptocurrencies.php
database\migrations\2025_04_05_033210_create_Transactions.php
database\migrations\2025_04_05_034744_create_wallets_table.php
database\migrations\2025_04_05_034930_create_fiat_transactions_table.php

database\seeders\CryptocurrencySeeder.php
database\seeders\DatabaseSeeder.php
database\seeders\TransactionSeeder.php
database\seeders\UserSeeder.php
database\seeders\WalletSeeder.php

***ขั้นตอนการ run***
1. เปิด command Prompt
2. พิม
cd C:\xampp\htdocs\cryto
code .
3. Vscode เข้า Terminal พิม php artisan serve
4. ทำการเพิ่มตารางพิม php artisan migrate   ที่ command Prompt
5. ทำการเพิ่มข้อมูล (ตาราง user และ cryptocurrencies) ในฐานข้อมูล พิม  php artisan db:seed ที่ command Prompt
    
