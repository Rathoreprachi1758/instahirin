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
        Schema::create('funding_apply_now', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('title');
            $table->string('email');
            $table->string('company');
            $table->string('hq');
            $table->string('website');
            $table->string('linkedin');
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('raising_capital');
            $table->string('raised_venture_capital');
            $table->string('raised_amount');
            $table->string('valuation');
            $table->string('enabling_technology');
            $table->string('industry');
            $table->text('challenges');
            $table->string('core_buyer');
            $table->string('investors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funding_apply_now');
    }
};
