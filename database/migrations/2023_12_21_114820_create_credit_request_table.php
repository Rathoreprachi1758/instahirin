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
        Schema::create('credit_request', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_id');
            $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('account_holder_name');
            $table->string('account_no');
            $table->string('cheque_Amount');
            $table->string('cheque_number');
            $table->string('cheque_issuing_bank');
            $table->string('Cheque_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credit_request');
    }
};
