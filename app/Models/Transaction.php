<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'Transaction_ID';
    protected $fillable = ['User_ID', 'Crypto_ID', 'Transaction_type', 'Amount', 'Price', 'Transaction_date', 'Status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'User_ID');
    }

    public function cryptocurrency()
    {
        return $this->belongsTo(Cryptocurrency::class, 'Crypto_ID');
    }
}