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
        Schema::create('marketing_plan_leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('company');
            $table->string('email');
            $table->string('phone');
            // $table->string('plan_categories');
            // $table->string('selected_plan');
            $table->unsignedBigInteger('plan_category_id');
            $table->foreign('plan_category_id')->references('id')->on('plan_categories');
        
            // Foreign key for plans table
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plans');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marketing_plan_leads');
    }
};
