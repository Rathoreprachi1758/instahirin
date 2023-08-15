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
        Schema::create('insta_hirin_requirements', function (Blueprint $table) {
            $table->id();
            $table->string('position_title')->nullable();
            $table->string('work_mode')->nullable();
            $table->string('project_description')->nullable();
            $table->string('key_skills')->nullable();
            $table->string('min_experience')->nullable();
            $table->string('max_experience')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('salary_currency')->nullable();
            $table->string('min_salary')->nullable();
            $table->string('max_salary')->nullable();
            $table->string('location')->nullable();
            $table->string('education_qualification')->nullable();
            $table->string('company_name')->nullable();
            $table->string('company_website')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_no_country_code')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('company_details')->nullable();
            $table->string('company_address')->nullable();
            $table->string('document')->nullable();
            $table->string('notify')->nullable();
            $table->string('status')->default('New');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insta_hirin_requirements');
    }
};
