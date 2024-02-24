<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('transaction_id');
            $table->decimal('amount', 10, 2);
            $table->string('currency');
            $table->decimal('crypto_amount', 10, 8)->nullable();
            $table->string('address')->nullable();
            $table->string('transaction_type');
            $table->json('data')->nullable();
            $table->enum('status', ['pending', 'completed'])->default('pending');
            $table->timestamps();
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
}
