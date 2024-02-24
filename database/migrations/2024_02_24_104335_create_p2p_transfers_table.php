<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateP2pTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p2p_transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('from_user');
            $table->unsignedBigInteger('to_user');
            $table->decimal('amount', 10, 2);
            $table->enum('status', ['pending', 'completed'])->default('pending');
            $table->timestamps();

            // Foreign key relationships
            $table->foreign('from_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('to_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p2p_transfers');
    }
}
