<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('salary_head_masters', function (Blueprint $table) {
            $table->id();
            $table->string('additional_Head');
            $table->string('deduction_Head');
            $table->string('professional_tax_ranges');
            $table->string('pf');
            $table->string('esi');
            $table->foreignId('employee_id')->constrained('employees');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('user_id')->constrained('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salary_head_masters');
    }
};
