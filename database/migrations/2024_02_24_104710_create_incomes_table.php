<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('income_to');
            $table->unsignedBigInteger('income_from');
            $table->string('income_type');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['pending', 'completed'])->default('pending');
            $table->timestamps();

            // Foreign key relationships
            $table->foreign('income_to')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('income_from')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incomes');
    }
}
