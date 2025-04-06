<?php

namespace App\Http\Controllers;

use App\Models\Cryptocurrency;
use Illuminate\Http\Request;

class CryptocurrencyController extends Controller
{
    public function index()
    {
        $cryptos = Cryptocurrency::all();
        return response()->json($cryptos);
    }

    public function store(Request $request)
    {
        $crypto = Cryptocurrency::create($request->all());
        return response()->json($crypto, 201);
    }
}