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
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            $table->string('holiday_name')->nullable();
            $table->string('holiday_date')->nullable();
            $table->string('holiday_type')->nullable();
            $table->string('excel_filename')->nullable();
            $table->longText('exceldata')->nullable(); 
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
        Schema::dropIfExists('holidays');
    }
};
