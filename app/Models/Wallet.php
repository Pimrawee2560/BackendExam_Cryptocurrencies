<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'Wallet_ID';
    protected $fillable = ['User_ID', 'Crypto_ID', 'Balance'];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID');
    }

    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'Crypto_ID');
    }
}