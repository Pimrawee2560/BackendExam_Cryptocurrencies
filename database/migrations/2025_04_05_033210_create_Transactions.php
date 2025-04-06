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
        Schema::create('Transactions', function (Blueprint $table) {
            $table->id('Transaction_ID');
            $table->unsignedBigInteger('User_ID');
            $table->unsignedBigInteger('Crypto_ID');
            $table->enum('Transaction_type', ['buy', 'sell', 'transfer']);
            $table->decimal('Amount', 15, 2); //ทศนิยม
            $table->decimal('Price', 15, 2); //ทศนิยม
            $table->dateTime('Transaction_date');
            $table->enum('Status', ['success', 'pending', 'failed']); //สำเร็จ กำลังดำเนินการ ไม่สำเร็จ
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
        Schema::dropIfExists('transactions');
    }
};
