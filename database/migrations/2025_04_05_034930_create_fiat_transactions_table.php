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
        Schema::create('fiat_transactions', function (Blueprint $table) {
            $table->id('Fiattransaction_ID');
            $table->unsignedBigInteger('User_ID');
            $table->decimal('Amount', 15, 2);
            $table->enum('Fiat_currency', ['THB', 'USD']); //ค่าเงินเ ไทย ยูเอส
            $table->enum('Transaction_type', ['deposit', 'withdraw']); //ฝาก ถอน
            $table->dateTime('Transaction_date');
            $table->enum('Status', ['success', 'pending', 'failed']);//สำเร็จ กำลังดำเนินการ ไม่สำเร็จ
            $table->timestamps();
    
            $table->foreign('User_ID')->references('User_ID')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fiat_transactions');
    }
};
