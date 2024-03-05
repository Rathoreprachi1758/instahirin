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
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('leave_id')->constrained('leaves');
            $table->string('leave_type')->nullable();
            $table->text('leave_reason');
            $table->string('leave_days');
            $table->string('leave_balance')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('employee_code')->nullable();
            $table->boolean('leave_status')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_requests');
    }
};
