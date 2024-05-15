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
        Schema::create('employee_salaries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_code')->constrained('employees');
            $table->string('employee_name');
            $table->string('salary_type');
            $table->string('per_hour')->nullable();
            $table->string('total_hours')->nullable();
            $table->string('basic_additional_head')->nullable();
            $table->string('medical_allowance_additional_head')->nullable();
            $table->string('subtotal_additional_head')->nullable();
            $table->string('profession_tax_deduction_head')->nullable();
            $table->string('profession_tax_total_deduction_head')->nullable();
            $table->string('pf_number')->nullable();
            $table->string('esi_number')->nullable();
            $table->string('total');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_salaries');
    }
};
