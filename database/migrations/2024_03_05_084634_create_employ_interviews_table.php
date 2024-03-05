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
        Schema::create('employ_interviews', function (Blueprint $table) {
            $table->id();
            $table->string('holiday_name')->nullable();
            $table->string('holiday_date')->nullable();
            $table->string('holiday_type')->nullable();
            $table->string('excel_filename')->nullable();
            $table->longText('exceldata')->nullable(); 
            $table->unsignedBigInteger('job_id')->nullable();
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->unsignedBigInteger('hire_me_application_id');
            $table->foreign('hire_me_application_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employ_interviews');
    }
};
