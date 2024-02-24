<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username',50)->nullable();
            $table->string('name',50);
            $table->string('email',50);
            $table->string('mobile',20);
            $table->string('password',500);
            $table->string('password1',50);
            $table->string('referral_id',50)->nullable();
            $table->integer('status')->default(1);
            $table->integer('fund_wallet')->default(0);
            $table->integer('wallet_balance')->default(0);
            $table->integer('self_investment')->default(0);
            $table->integer('is_admin')->default(0);
            $table->integer('direct_team')->default(0);
            $table->integer('total_income')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
}
};
