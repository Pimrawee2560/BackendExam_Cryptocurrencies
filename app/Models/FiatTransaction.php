<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiatTransaction extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'Fiattransaction_ID';
    protected $fillable = ['User_ID', 'Amount', 'Fiat_currency', 'Transaction_type', 'Transaction_date', 'Status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
