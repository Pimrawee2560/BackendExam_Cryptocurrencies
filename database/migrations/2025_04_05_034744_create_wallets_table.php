<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->id('Wallet_ID');
            $table->unsignedBigInteger('User_ID');
            $table->unsignedBigInteger('Crypto_ID');
            $table->decimal('Balance', 15, 2)->default(0); //ทศนิยม
            $table->timestamps();
    
            $table->foreign('User_ID')->references('User_ID')->on('user')->onDelete('cascade');
            $table->foreign('Crypto_ID')->references('Crypto_ID')->on('Cryptocurrencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
};
