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
        Schema::create('hire_me_application', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('contact_details')->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->string('current_location')->nullable();
            $table->string('skills_description')->nullable();
            $table->string('current_title')->nullable();
            $table->string('experience_year')->nullable();
            $table->string('experience_month')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('key_skills')->nullable();
            $table->string('expert_in')->nullable();
            $table->string('also_work_with')->nullable();
            $table->string('last_company')->nullable();
            $table->string('company_location')->nullable();
            $table->string('currently_working_here')->nullable();
            $table->string('working_since_date')->nullable();
            $table->string('working_since_date2')->nullable();
            $table->string('annual_salary_currency')->nullable();
            $table->string('annual_salary')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('document')->nullable();
            $table->string('notice_period')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hire_me_application');
    }
};
