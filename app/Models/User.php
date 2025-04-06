<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // ใช้ Authenticatable
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'user';
    // กำหนด primaryKey
    protected $primaryKey = 'user_id';

    // กำหนด fillable fields
    protected $fillable = [
        'Username', 
        'Password', 
        'Email', 
        'Phone', 
        'Balance'
    ];

    // กำหนดความสัมพันธ์กับตาราง transactions
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'User_ID');
    }

    // กำหนดความสัมพันธ์กับตาราง wallets
    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'User_ID');
    }

    // กำหนดความสัมพันธ์กับตาราง fiat_transactions
    public function fiatTransactions()
    {
        return $this->hasMany(FiatTransaction::class, 'User_ID');
    }

    // สามารถเพิ่มเมธอดอื่นๆ ได้ เช่น ความสัมพันธ์กับ roles, permissions เป็นต้น
}