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
        Schema::create('insta_hirin_onboards', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('contact_details')->nullable();
            $table->string('email')->nullable();
            $table->string('current_location')->nullable();
            $table->string('skills_description')->nullable();
            $table->string('current_title')->nullable();
            $table->string('experience_year')->nullable();
            $table->string('experience_month')->nullable();
            $table->string('key_skills')->nullable();
            $table->string('expert_in')->nullable();
            $table->string('also_work_with')->nullable();
            $table->string('working_since_date')->nullable();
            $table->string('working_since_date2')->nullable();
            $table->string('annual_salary_currency')->nullable();
            $table->string('annual_salary')->nullable();
            $table->string('highest_qualification')->nullable();
            $table->string('notice_period')->nullable();
            $table->string('availability')->nullable();
            $table->string('availability_date')->nullable();
            $table->string('availability_time_from')->nullable();
            $table->string('availability_time_to')->nullable();
            $table->string('resume_headline')->nullable();
            $table->string('status')->default('New');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insta_hirin_onboards');
    }
};
