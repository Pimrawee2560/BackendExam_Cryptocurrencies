<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create(Request $request)
    {
        $validated = $request->validate([
            'User_ID' => 'required|exists:user,User_ID',
            'Crypto_ID' => 'required|exists:cryptocurrencies,Crypto_ID',
            'Transaction_type' => 'required|in:buy,sell,transfer',
            'Amount' => 'required|numeric',
            'Price' => 'required|numeric',
            'Status' => 'required|in:success,pending,failed',
        ]);

        $transaction = Transaction::create([
            'User_ID' => $validated['User_ID'],
            'Crypto_ID' => $validated['Crypto_ID'],
            'Transaction_type' => $validated['Transaction_type'],
            'Amount' => $validated['Amount'],
            'Price' => $validated['Price'],
            'Transaction_date' => now(),
            'Status' => $validated['Status'],
        ]);

        return response()->json($transaction, 201);
    }
}