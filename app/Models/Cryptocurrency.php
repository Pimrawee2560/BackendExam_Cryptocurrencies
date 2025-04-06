<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cryptocurrency extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'Crypto_ID';
    protected $fillable = ['Crypto_name', 'Symbol', 'Description'];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'Crypto_ID');
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class, 'Crypto_ID');
    }
}