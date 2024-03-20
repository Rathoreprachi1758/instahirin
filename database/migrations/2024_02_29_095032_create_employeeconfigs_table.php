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
        Schema::create('employeeconfigs', function (Blueprint $table) {
            $table->id();
            $table->string('Emp_code')->nullable();
            $table->string('Emp_name')->nullable();
            $table->string('send_sms_allow')->nullable();
            $table->string('employee_self_service_allow')->nullable();
            $table->string('selfie_punch_allow')->nullable();
            $table->string('approve_selfie_punch')->nullable();
            $table->string('notification_to_own')->nullable();
            $table->string('notification_to_admin')->nullable();
            //
            $table->unsignedBigInteger('emp_id')->nullable();
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedBigInteger('comapny_id')->nullable();
            $table->foreign('comapny_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeeconfigs');
    }
};
