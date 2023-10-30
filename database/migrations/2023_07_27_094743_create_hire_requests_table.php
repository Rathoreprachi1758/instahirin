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
        Schema::create('hire_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('expert_id')->nullable();
            $table->string('name');
            $table->string('company');
            $table->string('email');
            $table->string('phone');
            $table->string('website')->nullable();
            $table->string('address')->nullable();
            $table->string('company_info')->nullable();
            $table->string('message');
            $table->string('hiring_type')->nullable();
            $table->string('priority')->default('normal');
            $table->string('source')->nullable();
            $table->string('document')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
            $table->string('from_time')->nullable();
            $table->string('to_time')->nullable();
            $table->string('virtual_assistance_call')->nullable();
            $table->string('availability_date')->nullable();
            $table->string('availability_time_from')->nullable();
            $table->string('availability_time_to')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hire_requests');
    }
};
