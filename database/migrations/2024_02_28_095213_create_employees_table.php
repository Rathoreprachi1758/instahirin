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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code');
            $table->string('employee_name')->nullable();
            $table->string('company')->nullable();
            $table->string('bizionic_id')->nullable();
            $table->string('department')->nullable();
            $table->string('designation')->nullable();
            $table->string('category')->nullable();
            $table->string('emp_status')->nullable();
            $table->string('enroll_id')->nullable();
            $table->string('punch_enquirey_required')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('father_or_husband_name')->nullable();
            $table->string('address')->nullable();
            $table->string('date_of_join')->nullable();
            $table->string('Email')->nullable();
            //
            $table->string('shift_1')->nullable();
            $table->string('shift_2')->nullable();
            $table->string('shift_3')->nullable();
            $table->string('shift_4')->nullable();
            //
            $table->string('weekoff1')->nullable();
            $table->string('weekoff_no')->nullable();
            $table->string('weekoff2')->nullable();
            $table->string('weekoff2_no')->nullable();
            //
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('comapny_id');
            $table->foreign('comapny_id')->references('id')->on('companies')->onDelete('cascade');
            $table->unsignedBigInteger('department_id');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
