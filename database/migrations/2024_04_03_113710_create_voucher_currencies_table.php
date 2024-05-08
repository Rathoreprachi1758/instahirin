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
        Schema::create('voucher_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('currency_limit')->nullable();
            $table->string('is_od')->nullable();
            $table->string('security_deposit_percentage')->nullable();
            $table->string('base_currency_id')->nullable();
            $table->string('security_deposit_percentage_rental')->nullable();
            // $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voucher_currencies');
    }
};
