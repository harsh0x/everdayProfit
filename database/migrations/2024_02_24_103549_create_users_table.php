<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('name',50);
            $table->string('email',50)->unique();
            $table->string('mobile');
            $table->string('password');
            $table->string('password1');
            $table->string('referral_id')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->decimal('fund_wallet', 10, 2)->default(0.00);
            $table->decimal('wallet_balance', 10, 2)->default(0.00);
            $table->decimal('self_invested', 10, 2)->default(0.00);
            $table->boolean('is_admin')->default(false);
            $table->unsignedBigInteger('direct_team')->default(0);
            $table->decimal('total_income', 10, 2)->default(0.00);
            $table->timestamps();

            // Foreign key relationship
            // $table->foreign('referral_id')->references('username')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

